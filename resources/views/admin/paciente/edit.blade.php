@extends('admin.master')

@section('title','Editar')
<link rel="icon" type="image/x-icon" href="/static/images/icon.png">

<div class="container-fluid">
	<div class="panel">
		<div class="breadcrumb-item">
			<a href="{{ url('/admin/paciente/edit') }}"  style="text-decoration: none;"><i class="fas fa-folder-open"></i> Admin/Paciente/Editar</a>
		</div>
		<div class="header">
			<h2 class="title"><i class="fas fa-plus"></i> Editar paciente </h2>
		</div>

		<div class="inside">
			{!! Form::open(['url' => '/admin/paciente/'.$p->id.'/edit', 'files' => true]) !!}
			<div class="row">
				<div class="col-md-4 p-3">
					<label for="typedocu">Tipo de documento Paciente: </label>
					<div class="input-group">
						<span class="input-group-text" id="basic-addon1">
							<i class="far fa-keyboard" style="width: 16px; height: 24px;"></i>
						</span>
					{!! Form::select('typedocu', ['Tarjeta de identidad' => 'Tarjeta de identidad', 
												'Cédula de ciudadania' => 'Cédula de ciudadania', 
												'Registro civil' => 'Registro civil', 
												'Cédula de extranjería' => 'Cédula de extranjería', 
												'Pasaporte' => 'Pasaporte'
												],$p->tipo_documento, ['class' => 'form-select']) !!}
					</div>
				</div>

				<div class="col-md-4 p-3">
					<label for="nopaciente">No. documento Paciente: </label>
					<div class="input-group">
						<span class="input-group-text" id="basic-addon1">
							<i class="far fa-keyboard" style="width: 16px; height: 24px;"></i>
						</span>
					{!! Form::text('nopaciente', $p->no_documento, ['class' => 'form-control']) !!}
					</div>
				</div>

				<div class="col-md-4 p-3">
					<label for="name">Nombres: </label>
					<div class="input-group">
						<span class="input-group-text" id="basic-addon1">
							<i class="far fa-keyboard" style="width: 16px; height: 24px;"></i>
						</span>
					{!! Form::text('name', $p->name, ['class' => 'form-control']) !!}
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4 p-3">
					<label for="lastname">Apellidos: </label>
					<div class="input-group">
						<span class="input-group-text" id="basic-addon1">
							<i class="far fa-keyboard" style="width: 16px; height: 24px;"></i>
						</span>
					{!! Form::text('lastname', $p->lastname, ['class' => 'form-control']) !!}
					</div>
				</div>

				<div class="col-md-4 p-3">
					<label for="date">Fecha de nacimiento: </label>
					<div class="input-group">
						<span class="input-group-text" id="basic-addon1">
							<i class="far fa-keyboard" style="width: 16px; height: 24px;"></i>
						</span>
					{!! Form::date('date', $p->date, ['class' => 'form-control', 'id'=>'datetimepicker']) !!}
					</div>
				</div>

				<div class="col-md-4 p-3">
					<label for="email">Correo electrónico: </label>
					<div class="input-group">
						<span class="input-group-text" id="basic-addon1">
							<i class="far fa-keyboard" style="width: 16px; height: 24px;"></i>
						</span>
					{!! Form::email('email', $p->email, ['class' => 'form-control']) !!}
					</div>
				</div>

			</div>


			<div class="row save">
				<div class="col-md-12">
					{!! Form::submit('Editar', ['class' => 'btn btn-success']) !!}
				</div>
			</div>

			{!! Form::close() !!}
		</div>
	</div>
</div>