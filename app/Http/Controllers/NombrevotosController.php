<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Nombre_votos;
use App\Votos;

class NombrevotosController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        return view('admin/votos/add_votos');     
    }

    public function show(Request $request)
    {
        $proyectos = nombre_votos::paginate(8);


 return view('admin/votos/all',["proyectos"=>$proyectos]);

    }


    public function create(Request $request)
    {
    
    }

    public function edit($id_usuario,Request $request)
    {
        
    }

    public function destroy(Request $request)
    {
        
    }

    public function store(Request $request)
    {
        $Nombrevotos = new  Nombre_votos;
        $Nombrevotos->nombre = strtoupper($request['name']);
        $Nombrevotos->acciones = 'Habilitado';

        $Nombrevotos->save();
         return redirect('/admin/nombre_votos')->with('flash_message_success','usted a votado con exito');
     }

  public function mostrar(){
     $datos = DB::select('select cont(*) from tutabla where id = $tuvariable');
              return view('admin.votos.add_votos', compact('datos'));
  } 

  public function habilitar($id){

 $proyecto = Nombre_votos::find($id);
 $proyecto->acciones='Habilitado';
 $proyecto->save();
  return redirect('/admin/votos/all')->with('flash_message_success','se Habilito con exito');
}

public function deshabilitar($id){
   $proyecto = Nombre_votos::find($id);
 $proyecto->acciones='Deshabilitado';
 $proyecto->save();
  return redirect('/admin/votos/all')->with('flash_message_success','se deshabilitado con exito');
  
}
}

