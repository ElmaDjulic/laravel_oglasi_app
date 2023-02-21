@props(['title' => ''])
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>{{$title}} | Oglasi za posao</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
		
		<link rel="dns-prefetch" href="https://fonts.gstatic.com">
		<link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
	
		
        <!-- All Plugin Css --> 
		<link rel="stylesheet" href="{{asset('css/plugins.css')}}">
		
		<!-- Style & Common Css --> 
		<link rel="stylesheet"  href="{{asset('css/common.css')}}">
        <link rel="stylesheet"  href="{{asset('css/main.css')}}">
		<!-- Scripts -->
		@vite(['resources/sass/app.scss', 'resources/js/app.js'])
		

		

    </head>
	
    <body>
	
			<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
				<div class="container">
					<a class="navbar-brand" href="{{route('listings.all')}}">
						<img src="{{asset('img/logo.png')}}" class="logo" alt=""></a>
					
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
						<span class="navbar-toggler-icon"></span>
					</button>
	
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<!-- Left Side Of Navbar -->
						<ul class="navbar-nav me-auto">
	
						</ul>
	
						<!-- Right Side Of Navbar -->
						<ul class="navbar-nav ms-auto">
							<!-- Authentication Links -->
							@guest
								@if (Route::has('login'))
									<li class="nav-item ">
										<a class="btn btn-outline-secondary" href="{{ route('login') }}">{{ __('Prijava') }}</a>
									</li>
								@endif
	
								@if (Route::has('register'))
									<li class="nav-item ms-2">
										<a class="btn btn-outline-danger" href="{{ route('register') }}">{{ __('Registracija') }}</a>
									</li>
								@endif
							@else
							
							
	
								<li class="nav-item dropdown">
								 
									<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
										{{ Auth::user()->name }}
									</a>
	
									<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
									   
										
										
										<a class="dropdown-item" href="{{ route('listings.index') }}">
											{{ __('Moji oglasi') }}
										</a>

										<a class="dropdown-item" href="{{ route('listings.create') }}">
											<span>Objavi novi oglas<i class="fa fa-plus"  style="margin-left:0.25em;"></i></span>
											
										</a>

										<a class="dropdown-item" href="{{ route('logout') }}"
										   onclick="event.preventDefault();
														 document.getElementById('logout-form').submit();">
											{{ __('Logout') }}
										</a>
	
										<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
											@csrf
										</form>
									</div>
								</li>
							@endguest
						</ul>
					</div>
				</div>
			</nav>
	
		{{ $slot }}

		<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
		<script src="{{asset('js/bootstrap.min.js')}}" ></script>
		<script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}" ></script>
		<script src="{{asset('js/bootsnav.js')}}"></script>
		<script src="{{asset('js/main.js')}}"></script>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
