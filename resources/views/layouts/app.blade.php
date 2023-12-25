<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
{{-- CSS File --}}
    <link rel="stylesheet" href="/css/main.css">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Restaurant</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm p-4 sticky-top">

            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   <img src="/images/logo.png" alt="Logo" class="img-fluid logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                              <a class="nav-link" href="{{url('/food')}}">Food Menu</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#special-offers">Special Offers</a>

                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#contact-us">Contact Us</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#about-us">About Us</a>
                            </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">

                           {{-- Search box --}}
                           <li class="align-item-end me-5">
                            <a href="" class="btn btn-outline-danger border-0"><i class="bi bi-telephone-forward-fill">  </i>(+49)1632435061</a>
                        </li>

                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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


        <main class="py-4">
            @yield('content')
        </main>

    </div>



    {{-- Footer --}}
	<div class="container-fluid p-5  bg-black text-light" id="footer">
		<div class="row mt-5">
			<!-- Address Section -->
			<div class="col-md-3 text-center">
				<h4 class="text-center">Our Adresses:</h4>
			  <dl>
				<dt>First Adress</dt>
				<dd>Am Gorbach 5, 59394 Nordkirchen</dd>

				<dt>Second Adress</dt>
				<dd>Am Gorbach 5, 59394 Nordkirchen</dd>

				<dt>Third Adress</dt>
				<dd>Am Gorbach 5, 59394 Nordkirchen</dd>

				<dt>Forth Adress</dt>
				<dd>Am Gorbach 5, 59394 Nordkirchen</dd>
			  </dl>
			</div>

			<!-- Logo and Brand -->
			<div class="col-md-6 text-center align-items-center footer">
				<img src="./images/logo.png" alt="Logo at the Footer" class="img-fluid">
			</div>

			<!-- Social contacts-->
			<div class="col-md-3 social-contact">
				<h4 class="text-center">Get in Touch</h4>
				 <ul class="text-center list-unstyled">
					<li><i class="bi bi-facebook"></i></li>
					<li><i class="bi bi-instagram"></i></li>
					<li><i class="bi bi-youtube"></i></li>
					<li><i class="bi bi-whatsapp"></i></li>
				 </ul>
			</div>
		</div>
	</div>


</body>
</html>
