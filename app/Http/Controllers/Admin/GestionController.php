<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Gestion;
use App\Models\Paciente;
use App\Models\Hospital;

use Validator;
use Carbon\Carbon;

class GestionController extends Controller
{
    public function __Construct(){
    	$this->middleware('auth');
        $this->middleware('isadmin');

    }

    public function getHome(){
        $gestion = Gestion::orderBy('id', 'desc')->paginate(25);
        $data = ['gestion' => $gestion];
        return view('admin.gestion.home', $data);
    }

    public function getGestionAdd(){
        $now = Carbon::now();
        $docpa = Hospital::pluck('name', 'id');
        $pac = Paciente::pluck('no_documento', 'id');
        $data = ['pac' => $pac, 'docpa' => $docpa, 'now' => $now];
        return view('admin.gestion.add', $data);
    }

    public function postGestionAdd(Request $request){
        $rules = [
            'datesecond' => 'required'
        ];

        $messages = [
            'datesecond.required' => 'Debes ingresar una fecha de salida correcta'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput(); 
        else:

            $gestion = new Gestion;
            $gestion->tipo_doc_paciente = e($request->input('typedocu'));
            $gestion->no_documento = e($request->input('no_documento'));
            $gestion->cod_hospital = e($request->input('codhos'));
            $gestion->fec_ingreso = e($request->input('datefirst'));
            $gestion->fec_salida = e($request->input('datesecond'));
            if($gestion->save()):
                return redirect('/admin/gestion')->with('message', 'Guardado con éxito.')->with('typealert', 'success');
            endif; 
        endif;
    }

    //Get editar gestion
    public function getGestionEdit($id){
        $now = Carbon::now();
        $g = Gestion::findOrFail($id);
        $pas = Paciente::pluck('no_documento', 'id');
        $hosp = Hospital::pluck('name', 'id');
        $data = ['hosp' => $hosp, 'pas' => $pas, 'g' => $g];
        return view('admin.gestion.edit', $data);
    }

    //Post editar gestion
    public function postGestionEdit($id, Request $request){
        $rules = [
            'datesecond' => 'required'
        ];

        $messages = [
            'datesecond.required' => 'Debes ingresar una fecha de salida correcta'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput(); 
        else:

            $gestion = Gestion::find($id);
            $gestion->tipo_doc_paciente = e($request->input('typedocu'));
            $gestion->no_documento = e($request->input('no_documento'));
            $gestion->cod_hospital = e($request->input('codhos'));
            $gestion->fec_salida = e($request->input('datesecond'));
            if($gestion->save()):
                return redirect('/admin/gestion')->with('message', 'Editado con éxito.')->with('typealert', 'success');
            endif; 
        endif;
    }
    
    //Eliminar gestion
    public function getGestionDelete($id){
        $g = Gestion::find($id);
    	if($g->delete()):
    		return back()->with('message', 'Borrado con éxito.')->with('typealert', 'success');
    	endif; 
    }

}
