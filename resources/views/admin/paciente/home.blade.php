@extends('admin.master')

@section('title','Pacientes')

{{-- favicon --}}
<link rel="icon" type="image/x-icon" href="/static/images/icon.png">
<link rel="stylesheet" href="{{ url('/static/css/gestion.css') }}">

	<main class="l-main">
		<div class="header">
			<div class="breadcrumb-item">
				<a href="{{ url('/admin/paciente') }}"  style="text-decoration: none;"><i class="fas fa-folder-open"></i> Admin/Paciente/</a>
			</div>
			<h2 class="title"><i class="fas fa-boxes"></i> Pacientes </h2>
			<div class="add">
				<a href="{{ url('/admin/paciente/add') }}" class="link"><i class="fas fa-plus"></i> Agregar</a>
			</div>
		</div>
	</main>

	<table class="table table-responsive table-striped mtop16">
		<thead>
			<tr>
				<td>ID</td>
				<td>Tipo de documento</td>
				<td>No. Documento</td>
				<td>Nombres</td>
				<td>Apellidos</td>
				<td>Fecha de nacimiento</td>
				<td>Email</td>
				<td></td>
			</tr>
		</thead>
		<tbody>
			@foreach($paciente as $p)
				<tr>
					<td>{{ $p->id }}</td>
					<td>{{ $p->tipo_documento }}</td>
					<td>{{ $p->no_documento }}</td>
					<td>{{ $p->name }}</td>
					<td>{{ $p->lastname }}</td>
					<td>{{ $p->date }}</td>
					<td>{{ $p->email }}</td>
					<td width="160">
						<div class="opts">
							<a href="{{ url('/admin/paciente/'.$p->id.'/edit') }}" data-toggle="tooltip" data-placement="top" title="Editar" class="edit boton">
								<i class="fas fa-edit"></i>
							</a>
							<a href="{{ url('/admin/paciente/'.$p->id.'/delete') }}" data-path="admin/paciente" data-action="delete" data-object="{{ $p->id }}" data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn-deleted boton delete">
								<i class="fas fa-trash-alt"></i>
							</a>
						</div>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>


	<!-- FOOTER-->
	<footer class="footer">
		<p class="footer__title">Gestión de pacientes</p>
		<p class="footer__copy">&#169; Mileer. All rigths reserved</p>
	</footer>


