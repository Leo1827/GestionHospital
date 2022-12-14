<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Paciente;

use Validator;

class PacienteController extends Controller
{
    public function __Construct(){
    	$this->middleware('auth');
        $this->middleware('isadmin');

    }
    //Vista Inicio de paciente
    public function getHome(){
        $paciente = Paciente::orderBy('id', 'desc')->paginate(25);
        $data = ['paciente' => $paciente];
        return view('admin.paciente.home', $data);
    }
    //Get agregar paciente
    public function getPacienteAdd(){
        return view('admin.paciente.add');
    }
    //Post agregar paciente
    public function postPacienteAdd(Request $request){
        $rules = [
            'nopaciente' => 'required',
            'name' => 'required',
            'lastname' => 'required',
            'date' => 'required',
            'email' => 'required'
        ];

        $messages = [
            'nopaciente.required' => 'Debes ingresar un numero de documento valido',
            'name.required' => 'Debes ingresar un nombre',
            'lastname.required' => 'Debes ingresar un apellido',
            'date.required' => 'Debes ingresar una fecha valida',
            'email.required' => 'Debes ingresar un correo electrónico'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput(); 
        else:

            $paciente = new Paciente;
            $paciente->tipo_documento = e($request->input('typedocu'));
            $paciente->no_documento = e($request->input('nopaciente'));
            $paciente->name = e($request->input('name'));
            $paciente->lastname = e($request->input('lastname'));
            $paciente->date = e($request->input('date'));
            $paciente->email = e($request->input('email'));
            if($paciente->save()):
                return redirect('/admin/paciente')->with('message', 'Guardado con éxito.')->with('typealert', 'success');
            endif; 
        endif;
    }

    //Get editar paciente
    public function getPacienteEdit($id){
        $p = Paciente::findOrFail($id);
        $data = ['p' => $p];
        return view('admin.paciente.edit', $data);
    }

    //Post editar paciente
    public function postPacienteEdit($id, Request $request){
        $rules = [
            'nopaciente' => 'required',
            'name' => 'required',
            'lastname' => 'required',
            'date' => 'required',
            'email' => 'required'
        ];

        $messages = [
            'nopaciente.required' => 'Debes ingresar un numero de documento valido',
            'name.required' => 'Debes ingresar un nombre',
            'lastname.required' => 'Debes ingresar un apellido',
            'date.required' => 'Debes ingresar una fecha valida',
            'email.required' => 'Debes ingresar un correo electrónico'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput(); 
        else:
            $paciente = Paciente::find($id);
            $paciente->tipo_documento = e($request->input('typedocu'));
            $paciente->no_documento = e($request->input('nopaciente'));
            $paciente->name = e($request->input('name'));
            $paciente->lastname = e($request->input('lastname'));
            $paciente->date = e($request->input('date'));
            $paciente->email = e($request->input('email'));
            if($paciente->save()):
                return redirect('/admin/paciente')->with('message', 'Editado con éxito.')->with('typealert', 'success');
            endif; 
        endif;
    }
    
    //Eliminar paciente
    public function getPacienteDelete($id){
        $p = Paciente::find($id);
    	if($p->delete()):
    		return back()->with('message', 'Borrado con éxito.')->with('typealert', 'success');
    	endif; 
    }

}
