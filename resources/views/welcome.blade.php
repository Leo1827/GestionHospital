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
				<a href="{{ url('/') }}" class="nav__logo">CRUD laravel </a>
			</div>
	
			<div class="nav__menu" id="nav-menu">
				<ul class="nav__list">
					<li class="nav__item"><a href="{{ url('/login') }}" class="nav__link">Inicio de sesion</a></li>
					<li class="nav__item"><a href="{{ url('/register') }}" class="nav__link">Registro de usuario</a></li>
					
				</ul>
			</div>
	
			<div class="nav__toggle" id="nav-toggle">
				<i class='bx bx-menu'></i>
			</div>
			
		</nav>
			
	</header>

    <div class="wrapper">
        <main class="l-main">
            <!-- Gestion -->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">Prueba<br><span class="home__title-color">GESTION <br> HOSPITALARIA ()</span><br> Mileer León</h1>
                    <h3> Usuario- prueba@gmail.com <br> Contraseña - 12345678</h3>
                </div>
    
                <div class="home__social">
                    <a href="https://www.linkedin.com/in/mileer-duban-leon-rincon/" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
                    <a href="https://github.com/Leo1827" class="home__social-icon"><i class='bx bxl-github' ></i></a>
                </div>
    
                <div class="home__img">
                    <svg class="home__blob" viewBox="0 0 479 467" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <mask id="mask0" mask-type="alpha">
                            <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                        </mask>
                        <g mask="url(#mask0)">
                            <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                            
                        </g>
                    </svg>
                </div>
            </section>
        </main>
    
        <!-- FOOTER-->
        <footer class="footer">
            <p class="footer__title">Gestión hospitalaria</p>
            <p class="footer__copy">&#169; Mileer. All rigths reserved</p>
        </footer>
        
        



	<!-- SCROLL REVEAL -->
	<script src="https://unpkg.com/scrollreveal"></script>
	<script src="{{ url('/static/js/sidebar.js?v='.time()) }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>