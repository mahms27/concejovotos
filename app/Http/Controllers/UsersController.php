<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 
use Auth;
use Session;
use App\User;
use App\Votos;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    
    public function index(){
    return view('user.user_login');


    }
   public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
             if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
                //echo "Success"; die;
              
                return redirect('/user/dashboard');
            }else{
                //echo "failed"; die;
                return redirect('/index')->with('flash_message_error','Invalid Username or Password');
            }
        }
        return view('user.user_login');
}
public function updatePassword(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;

            $old_pwd = User::where(['id' => Auth::user()->id])->first();
            $current_pwd = $data['current_pwd'];
            if(Hash::check($current_pwd,$old_pwd->password)){
                $new_pwd = bcrypt($data['new_pwd']);
                User::where('id',Auth::User()->id)->update(['password'=>$new_pwd]);
                return redirect('/user/settings')->with('flash_message_success','Contraseña Correcta');
            }else {
                return redirect('/user/settings')->with('flash_message_error','Contraseña Incorrecta!');
            }
        }
    }


 public function logout(){
        Session::flush();
        return redirect('/index')->with('flash_message_success','a cerrado sesion correctamente'); 
    }
      public function settings(){
          if(Auth::check()){
        return view('user.settings');
        }else{
      return redirect('/index');

}    }
 
public function dashboard(){
    if(Auth::check()){
	return view('user.dashboard');
}else{
      return redirect('/index');
}

}	

  

    
    /*public function votar(Request $request){
        if(Request::has('NO')){
           

              $data = new Votos();
           $data= Input::get('nombreproyecto');
           
        
        return redirect('datamanager');
    }*/

}
