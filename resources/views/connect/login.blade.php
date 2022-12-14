@extends('connect.master')

@section('title', 'login')

@section('content')
<div class="box box_login shadow container">
	<!--Alert--->
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
			<h1><p class="titlle">Iniciar sesion </p></h1>
		</a>
	</div>
	<!-- Inicio de sesion -->
	<div class="inside">
		{!! Form::open(['url' => '/login']) !!}
            <label for="email">Correo Electrónico</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-envelope-open ino"></i></div>
                </div>
                {!! Form::email('email', null, ['class' => 'form-control']) !!}
            </div>
            <label for="email" class="mtop16">Password</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-lock ino"></i></div>
                </div>
            {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>

		    {!! Form::submit('Ingresar', ['class' => 'btn btn-success mt-4']) !!}
		{!! Form::close() !!}

		<div class="footer mtop16">
			<a href="{{ url('/register') }}">¿No tienes una cuenta?, Registrate</a>
		</div>
    </div>
	<!-- Fin inicio de sesion -->
</div>
@stop