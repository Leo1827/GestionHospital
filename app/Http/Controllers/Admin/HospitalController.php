<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Hospital;

use Validator;

class HospitalController extends Controller
{
    public function __Construct(){
    	$this->middleware('auth');
        $this->middleware('isadmin');

    }
    //Vista Inicio hospital
    public function getHome(){
        $hospital = Hospital::orderBy('id', 'desc')->paginate(25);
        $data = ['hospital' => $hospital];
        return view('admin.hospital.home', $data);
    }
    //Post: Agregar hospital
    public function postHospitalAdd(Request $request){
        $rules = [
            'name' => 'required'
        ];

        $messages = [
            'name.required' => 'Debes ingresar un nombre de hospital'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput(); 
        else:
            $hospital = new Hospital;
            $hospital->name = e($request->input('name'));
            
            if($hospital->save()):
                return redirect('/admin/hospital')->with('message', 'Guardado con éxito.')->with('typealert', 'success');
            endif; 
        endif;
    }

    //Get editar hospital
    public function getHospitalEdit($id){
        $h = Hospital::findOrFail($id);
        $data = ['h' => $h];
        return view('admin.hospital.edit', $data);
    }

    //Post Editar hospital
    public function postHospitalEdit($id, Request $request){
        $rules = [
            'name' => 'required'
        ];

        $messages = [
            'name.required' => 'Debes ingresar un nombre de hospital'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput(); 
        else:
            $hospital = Hospital::find($id);
            $hospital->name = e($request->input('name'));
            
            if($hospital->save()):
                return redirect('/admin/hospital')->with('message', 'Editado con éxito.')->with('typealert', 'success');
            endif; 
        endif;
    }

    //Get Eliminar hospital
    public function getHospitalDelete($id){
        $h = Hospital::find($id);
        if($h->delete()):
    		return back()->with('message', 'Borrado con éxito.')->with('typealert', 'success');
    	endif;
    }
}
