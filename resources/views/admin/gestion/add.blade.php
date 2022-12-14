@extends('admin.master')

@section('title','Agregar')
<link rel="icon" type="image/x-icon" href="/static/images/icon.png">

<div class="container-fluid">
	<div class="panel shadow">
		<div class="header">
			<h2 class="title"><i class="fas fa-plus"></i> Agregar gestión </h2>
		</div>

		<div class="inside">
			{!! Form::open(['url' => '/admin/gestion/add', 'files' => true]) !!}
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
												],null, ['class' => 'form-select']) !!}
					</div>
				</div>

				<div class="col-md-4 p-3">
					<label for="no_documento">No. documento Paciente: </label>
					<div class="input-group">
						<span class="input-group-text" id="basic-addon1">
							<i class="far fa-keyboard" style="width: 16px; height: 24px;"></i>
						</span>
					{!! Form::select('no_documento', $pac, 0, ['class' => 'form-select']) !!}
					</div>
				</div>

				<div class="col-md-4 p-3">
					<label for="codhos">Codigo Hospital: </label>
					<div class="input-group">
						<span class="input-group-text" id="basic-addon1">
							<i class="far fa-keyboard" style="width: 16px; height: 24px;"></i>
						</span>
					{!! Form::select('codhos', $docpa,0, ['class' => 'form-select']) !!}
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4 p-3">
					<label for="datefirst">Fecha de ingreso: </label>
					<div class="input-group">
						<span class="input-group-text" id="basic-addon1">
							<i class="far fa-keyboard" style="width: 16px; height: 24px;"></i>
						</span>

					{!! Form::date('datefirst', $now, ['class' => 'form-control', 'disabled']) !!}
					</div>
				</div>

				<div class="col-md-4 p-3">
					<label for="datesecond">Fecha de salida: </label>
					<div class="input-group">
						<span class="input-group-text" id="basic-addon1">
							<i class="far fa-keyboard" style="width: 16px; height: 24px;"></i>
						</span>
					{!! Form::date('datesecond', null, ['class' => 'form-control', 'id'=>'datetimepicker']) !!}
					</div>
				</div>

			</div>


			<div class="row save">
				<div class="col-md-12">
					{!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
				</div>
			</div>

			{!! Form::close() !!}
		</div>
	</div>
</div>