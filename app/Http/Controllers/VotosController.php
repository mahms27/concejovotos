<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Votos;
use App\Nombre_votos;
use Auth;
use DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use Carbon\Carbon;
class VotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
$proyectos = nombre_votos::all();


  return view('user.votos.index',["proyectos"=>$proyectos]);
  
  }else{

 return redirect('/index');
  }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    { 

        $id_proyecto = $request->proyecto;
        $votos= $request->votar;
        $user_id=Auth::user()->id;
      $votos_duplicado=Votos::where('id_nombre_votos', '=', $id_proyecto)->where('user_id', '=' , $user_id)->get();

  if($votos_duplicado->isNotEmpty()) {
 return redirect('/user/votos/index')->with('flash_message_error','usted ya voto este proyecto');
        
       }

    if ($votos=='si') {
       
       $data = new Votos();
                $data->user_id = $user_id;
                $data->id_nombre_votos = $id_proyecto;          
                    $data->si='1';
                $data->save();
             return redirect('/user/votos/index')->with('flash_message_success','usted a votado con exito');
              
      }
       if ($votos=='no') {
       $data = new Votos();
                $data->user_id = $user_id;
                $data->id_nombre_votos= $id_proyecto; 
                $data->no='1';
                $data->save();
                
        
                 return redirect('/user/votos/index')->with('flash_message_success','usted a votado con exito');
      }
      if ($votos=='voto_en_blanco') {
       $data = new Votos();
                $data->user_id = $user_id;
                $data->id_nombre_votos= $id_proyecto;  
                $data->voto_en_blanco='1';
                $data->save();
                
        
                 return redirect('/user/votos/index')->with('flash_message_success','usted a votado con exito');
      }
       
    
 return redirect('/user/votos/index');
     

        
    }
    public function pantalla(Request $request){

$pantallas = DB::table('votos')->select('nombre_votos.nombre as id_nombre_votos' , 'nombre_votos.acciones as acciones' , DB::raw('SUM(IF(`si` > 0, 1, 0)) as total_si'), 
DB::raw('SUM(IF(`no` > 0, 1, 0)) as total_no'), 
DB::raw('SUM(IF(`voto_en_blanco` > 0, 1, 0)) as total_voto_blanco'))
->join('nombre_votos','nombre_votos.id','=','votos.id_nombre_votos')
->where('acciones','=','habilitado')
->groupBy('id_nombre_votos')->get();




$mostrarusers = DB::table('votos')
->join('users','users.id','=','votos.user_id')
->join('nombre_votos','nombre_votos.id','=','votos.id_nombre_votos')
->select('users.name as usuario', 'nombre_votos.nombre as proyecto','si','no','voto_en_blanco')->whereDate('votos.created_at', Carbon::today())

->get();


 
return view('pantalla',["pantallas"=> $pantallas,"mostrarusers"=>$mostrarusers]);

 
    }

   
    public function show(Request $request)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}

 