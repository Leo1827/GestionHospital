@extends('connect.master')

@section('title', 'Registrarse')

@section('content')

<div class="box box_register shadow">
	<!--Alert-->
	@if(Session::has('message'))
	    <div class="container">
	    	<div class="mtop16 alert alert-{{ Session::get('typealert') }}" style="display:none;">
	    		{{ Session::get('message') }}
	    		@if ($errors->any())
	    		<ul>
	    			@foreach($errors->all() as $error)
	    			<li> {{ $error }} </li>
	    			@endforeach
	    		</ul>
	    		@endif
	    		<script>
	    			$('.alert').slideDown();
	    			setTimeout(function(){ $('.alert').slideUp(); }, 10000)
	    		</script>
	    	</div>
	    </div>
	@endif
	<div class="header">
		<a href="{{ url('/') }}">
			<h1><p class="titllere">Registro </p></h1>
		</a>
	</div>
	<div class="inside">
	{!! Form::open(['url' => '/register']) !!}
	<label for="name">Nombres</label>
	<div class="input-group">
		<div class="input-group-prepend">
			<div class="input-group-text"><i class="fas fa-user ino"></i></div>
		</div>
	    {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
	</div>
		<label for="lastname" class="mtop16">Apellidos</label>
	<div class="input-group">
		<div class="input-group-prepend">
			<div class="input-group-text"><i class="fas fa-user-tag ino"></i></div>
		</div>
	    {!! Form::text('lastname', null, ['class' => 'form-control', 'required']) !!}
	</div>
		<label for="email" class="mtop16">Correo Electrónico</label>
	<div class="input-group">
		<div class="input-group-prepend">
			<div class="input-group-text"><i class="fas fa-envelope-open ino"></i></div>
		</div>
	    {!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
	</div>
	<label for="password" class="mtop16">Password</label>
	<div class="input-group">
		<div class="input-group-prepend">
			<div class="input-group-text"><i class="fas fa-lock ino"></i></div>
		</div>
	    {!! Form::password('password', ['class' => 'form-control', 'required']) !!}
	</div>
	<label for="cpassword" class="mtop16">Confirmar Password</label>
	<div class="input-group">
		<div class="input-group-prepend">
			<div class="input-group-text"><i class="fas fa-lock ino"></i></div>
		</div>
	    {!! Form::password('cpassword', ['class' => 'form-control', 'required']) !!}
	</div>
	{!! Form::submit('Registrarse', ['class' => 'btn btn-success mt-4']) !!}
	{!! Form::close() !!}

	

	<div class="footer mtop16">
    	<a href="{{ url('/login') }}">Ya tengo una cuenta, Ingresar.</a>
    </div>
    </div>
</div>
@stop