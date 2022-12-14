<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="routeName" content="{{ Route::currentRouteName() }}">
	{{-- favicon --}}
	<link rel="icon" type="image/x-icon" href="/static/images/icon.png">

	<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

	<!-- Add the slick-theme.css if you want default styling -->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
	
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>	

	<!-- =====BOX ICONS===== -->
	<script src="https://kit.fontawesome.com/b0d8aefb17.js" crossorigin="anonymous"></script>
	<link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

	<link rel="stylesheet" href="{{ url('/static/css/sidebar.css') }}">
	<link rel="stylesheet" href="{{ url('/static/css/gestion.css') }}">
	

</head>
<body>
	
		
	<!--Menu Header-->
	<header class="l-header">
		<nav class="nav bd-grid">
			<div>
				<a href="{{ url('/') }}" class="nav__logo">Prueba de conocimientos</a>
			</div>
	
			<div class="nav__menu" id="nav-menu">
				<ul class="nav__list">
					<li class="nav__item"><a href="{{ url('/admin') }}" class="nav__link">Inicio</a></li>
					<li class="nav__item"><a href="{{ url('/admin/hospital') }}" class="nav__link">Hospitales</a></li>
					<li class="nav__item"><a href="{{ url('/admin/paciente') }}" class="nav__link">Pacientes</a></li>
					<li class="nav__item"><a href="{{ url('/admin/gestion') }}" class="nav__link">Gestión</a></li>
					<li class="nav__item"><a href="{{ url('/logout') }}" title="Salir" class="nav__link">{{ Auth::user()->name }} <i class="fas fa-sign-out-alt"></i> Cerrar sesion</a></li>
				</ul>
			</div>
	
			<div class="nav__toggle" id="nav-toggle">
				<i class='bx bx-menu'></i>
			</div>
			
		</nav>
			<!--Alert-->
			@if(Session::has('message'))
			<div class="container">
				<div class="mtop32 alert alert-{{ Session::get('typealert') }}" style="display:none;">
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
						setTimeout(function(){ $('.alert').slideUp(); }, 1500)
					</script>
				</div>
			</div>
			@endif
	</header>



	<!-- SCROLL REVEAL -->
	<script src="https://unpkg.com/scrollreveal"></script>
	<script src="{{ url('/static/js/sidebar.js?v='.time()) }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>