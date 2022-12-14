@extends('admin.master')

@section('title','Hospital')
{{-- favicon --}}
<link rel="icon" type="image/x-icon" href="/static/images/icon.png">
<link rel="stylesheet" href="{{ url('/static/css/gestion.css') }}">


	<main class="l-main">
		<div class="header pb-3">
			<div class="breadcrumb-item">
				<a href="{{ url('/admin/hospital') }}"  style="text-decoration: none;"><i class="fas fa-folder-open"></i> Admin/Hospital/</a>
			</div>
			<h2 class="title"><i class="fas fa-boxes"></i> Hospitales </h2>
			<!-- Button trigger modal -->
			<div class="add">
				<a href="{{ url('/admin/paciente/add') }}" data-toggle="modal" data-target="#modalAdd" class="link"><i class="fas fa-plus"></i> Agregar</a>
			</div>
		</div>
	</main>	

	<table class="table table-responsive table-striped mtop16">
		<thead>
			<tr>
				<td>ID</td>
				<td>Nombre Hospital</td>
				<td></td>
			</tr>
		</thead>
		<tbody>
			@foreach($hospital as $h)
				<tr>
					<td>{{ $h->id }}</td>
					<td>{{ $h->name }}</td>
					<td width="160">
						<div class="opts">
							<a href="{{ url('/admin/hospital/'.$h->id.'/edit') }}" data-toggle="tooltip" data-placement="top" title="Editar" class="edit boton">
								<i class="fas fa-edit"></i>
							</a>
							<a href="{{ url('/admin/hospital/'.$h->id.'/delete') }}" data-path="admin/hospital" data-action="delete" data-object="{{ $h->id }}" data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn-deleted boton delete">
								<i class="fas fa-trash-alt"></i>
							</a>
						</div>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	
	<!-- Modal agregar formulario -->
	<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Agregar Hospital</h5>
				</div>
					<div class="modal-body">
						{!! Form::open(['url' => '/admin/hospital', 'files' => true]) !!}
							<div class="row">
								<div class="col-md-12 p-3">
									<label for="name" class="pb-2">Nombre Hospital: </label><br>
									<div class="input-group">
										<span class="input-group-text" id="basic-addon1">
											<i class="far fa-keyboard" style="width: 16px; height: 24px;"></i>
										</span>
									{!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
								{!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
							</div>
						{!! Form::close() !!}
					</div>
			</div>
		</div>
	</div>

	<!-- FOOTER-->
	<footer class="footer">
		<p class="footer__title">Gestión de hospital</p>
		<p class="footer__copy">&#169; Mileer. All rigths reserved</p>
	</footer>


