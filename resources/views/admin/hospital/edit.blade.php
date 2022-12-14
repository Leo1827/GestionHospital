@extends('admin.master')

@section('title','Editar')
<link rel="icon" type="image/x-icon" href="/static/images/icon.png">

<div class="container-fluid">
	<div class="panel">
		<div class="breadcrumb-item">
			<a href="{{ url('/admin/hospital') }}"  style="text-decoration: none;"><i class="fas fa-folder-open"></i> Admin/Hospital</a>
		</div>
		<div class="header">
			<h2 class="title"><i class="fas fa-plus"></i> Editar paciente </h2>
		</div>

		<div class="inside">
			{!! Form::open(['url' => '/admin/hospital/'.$h->id.'/edit', 'files' => true]) !!}
				<div class="row">
					<div class="col-md-12 p-3">
						<label for="name" class="pb-2">Nombre Hospital: </label><br>
						<div class="input-group">
							<span class="input-group-text" id="basic-addon1">
								<i class="far fa-keyboard" style="width: 16px; height: 24px;"></i>
							</span>
						{!! Form::text('name', $h->name, ['class' => 'form-control', 'required']) !!}
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