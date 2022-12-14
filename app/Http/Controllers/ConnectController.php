<?php

namespace App\Http\Controllers;
use Validator, Hash, Auth;

use Illuminate\Http\Request;
use App\Models\User;

class ConnectController extends Controller
{
    // Accion, funcion
    public function __construct(){
		$this->middleware('guest')->except(['getLogout']);
	}
    
    public function getLogin() {
        return view('connect.login');
    }
    public function postLogin(Request $request) {
        $rules = [
    		'email' => 'required|email',
    		'password' => 'required|min:8'
    	];
    	$messages = [
    		'email.required' => 'Su correo electrónico es requerido.', 
    		'email.email' => 'El formato de su correo electrónico es invalido',
    		'password.required' => 'Por favor escriba una contraseña.',
    		'password.min' => 'La contraseña debe tener al menos 8 caracteres.'
    	];

    	$validator = Validator::make($request->all(), $rules, $messages);
    	if($validator->fails()):
    		return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger'); 
    	else:
    		if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')], true)):
                if(Auth::user()->status == "100"):
                    return redirect('/logout');
                else:
    			    return redirect('/admin');
                endif;
    		    else:
    			    return back()->with('message','Correo electrónico o contraseña erronea')->with('typealert','danger');
    		endif;
    	endif;
    }

    public function getRegister(){
    	return view('connect.register');
    }

    public function postRegister(Request $request){
    	$rules = [
    		'name' => 'required',
    		'lastname' => 'required',
    		'email' => 'required|email|unique:users,email',
    		'password' => 'required|min:8',
    		'cpassword' => 'required|same:password'
    	];

    	$messages = [
    		'name.required' => 'Su nombre es requerido.',
    		'lastname.required' => 'Su apellido es requerido.',
    		'email.required' => 'Su correo electrónico es requerido.', 
    		'email.email' => 'El formato de su correo electrónico es invalido',
    		'email.unique' => 'Ya existe un usuario registrado con este correo electrónico',
    		'password.required' => 'Por favor escriba una contraseña.',
    		'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
    		'cpassword.required' => 'Es necesario confirmar la contraseña.',
    		'cpassword.min' => 'La confirmación de la contraseña debe tener al menos 8 caracteres.',
    		'cpassword.same' => 'Las contraseñas no coinciden.'
    	];

    	$validator = Validator::make($request->all(), $rules, $messages);
    	if($validator->fails()):
    		return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger'); 
    	else:
    		$user = new User;
    		$user->name = e($request->input('name'));
    		$user->lastname = e($request->input('lastname'));
    		$user->email = e($request->input('email'));
    		$user->password = Hash::make($request->input('password'));

    		if ($user->save()): 
    			return redirect('/login')->with('message','Tu usuario se creo con exito, ahora puede iniciar sesión ')->with('typealert', 'success');
    		endif;
    	endif;
    }

    public function getLogout(){
        $status = Auth::user()->status;
        Auth::logout();
        if($status == "100"):
            return redirect('/login')->with('message','Su usuario fue suspendido.')->with('typealert', 'danger');
        else:
            return redirect('/');
        endif;
    }
}
