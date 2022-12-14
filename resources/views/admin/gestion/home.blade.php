@extends('admin.master')

@section('title','Gestión')
{{-- favicon --}}
<link rel="icon" type="image/x-icon" href="/static/images/icon.png">
<link rel="stylesheet" href="{{ url('/static/css/gestion.css') }}">

	<main class="l-main">
		<div class="header">
			<div class="breadcrumb-item">
				<a href="{{ url('/admin/gestion') }}"  style="text-decoration: none;"><i class="fas fa-folder-open"></i> Admin/Gestión/</a>
			</div>
			<h2 class="title"><i class="fas fa-boxes"></i> Gestión hospitalaria </h2>
			<div class="add">
				
				<a href="{{ url('/admin/gestion/add') }}" class="link"><i class="fas fa-plus"></i> Agregar</a>
			</div>
		</div>
	</main>

	<table class="table table-responsive table-striped mtop16">
		<thead>
			<tr>
				<td>ID</td>
				<td>Tipo de documento</td>
				<td>No. Documento</td>
				<td>Codigo hospital</td>
				<td>Fecha de ingreso</td>
				<td>Fecha de salida</td>
				<td></td>
			</tr>
		</thead>
		<tbody>
			@foreach($gestion as $g)
				<tr>
					<td>{{ $g->id }}</td>
					<td>{{ $g->tipo_doc_paciente }}</td>
					<td>{{ $g->no_documento }}</td>
					<td>{{ $g->cod_hospital }}</td>
					<td>{{ $g->created_at }}</td>
					<td>{{ $g->fec_salida }}</td>
					<td width="160">
						<div class="opts">
							<a href="{{ url('/admin/gestion/'.$g->id.'/edit') }}" data-toggle="tooltip" data-placement="top" title="Editar" class="edit boton">
								<i class="fas fa-edit"></i>
							</a>
							<a href="{{ url('/admin/gestion/'.$g->id.'/delete') }}" data-path="admin/gestion" data-action="delete" data-object="{{ $g->id }}" data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn-deleted boton delete">
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
		<p class="footer__title">Gestión hospitalaria</p>
		<p class="footer__copy">&#169; Mileer. All rigths reserved</p>
	</footer>


