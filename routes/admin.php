<?php 

    Route::prefix('/admin')->group(function(){
	    Route::get('/', 'App\Http\Controllers\Admin\DashboardController@getDashboard')->name('dashboard');

        //Gestion paciente
        //GET
        Route::get('/paciente', 'App\Http\Controllers\Admin\PacienteController@getHome')->name('paciente');
        Route::get('/paciente/add', 'App\Http\Controllers\Admin\PacienteController@getPacienteAdd')->name('paciente_add');
        Route::get('/paciente/{id}/edit', 'App\Http\Controllers\Admin\PacienteController@getPacienteEdit')->name('paciente_edit');
        Route::get('/paciente/{id}/delete', 'App\Http\Controllers\admin\PacienteController@getPacienteDelete')->name('paciente_delete');
        //POST
        Route::post('/paciente/add', 'App\Http\Controllers\Admin\PacienteController@postPacienteAdd')->name('paciente_add');
        Route::post('/paciente/{id}/edit', 'App\Http\Controllers\Admin\PacienteController@postPacienteEdit')->name('paciente_edit');
        

        //Gestion hospital
        //Get
        Route::get('/hospital', 'App\Http\Controllers\Admin\HospitalController@getHome')->name('hospital');
        Route::get('/hospital/{id}/edit', 'App\Http\Controllers\Admin\HospitalController@getHospitalEdit')->name('hospital_edit');
        Route::get('/hospital/{id}/delete', 'App\Http\Controllers\admin\HospitalController@getHospitalDelete')->name('hospital_delete');
        //Post 
        Route::post('/hospital', 'App\Http\Controllers\Admin\HospitalController@postHospitalAdd')->name('hospital_add');
        Route::post('/hospital/{id}/edit', 'App\Http\Controllers\Admin\HospitalController@postHospitalEdit')->name('hospital_edit');

        //Gestion hospital
        Route::get('/gestion', 'App\Http\Controllers\Admin\GestionController@getHome')->name('gestion');
        Route::get('/gestion/add', 'App\Http\Controllers\Admin\GestionController@getGestionAdd')->name('gestion_add');
        Route::get('/gestion/{id}/edit', 'App\Http\Controllers\Admin\GestionController@getGestionEdit')->name('gestion_edit');
        Route::get('/gestion/{id}/delete', 'App\Http\Controllers\admin\GestionController@getGestionDelete')->name('gestion_delete');
        //Post
        Route::post('/gestion/add', 'App\Http\Controllers\Admin\GestionController@postGestionAdd')->name('gestion_add');
        Route::post('/gestion/{id}/edit', 'App\Http\Controllers\Admin\gestionController@postGestionEdit')->name('gestion_edit');
    });



 ?>