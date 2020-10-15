<!DOCTYPE html>
<html lang="en">

<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>DIU Counseling Hour System</title>

		<!-- Favicons -->
		<link type="image/x-icon" href="{{ asset('/') }}frontend/assets/img/favicon.png" rel="icon">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/bootstrap.min.css">

		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{ asset('/') }}frontend/assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="{{ asset('/') }}frontend/assets/plugins/fontawesome/css/all.min.css">
				<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/bootstrap-datetimepicker.min.css">

		<!-- Full Calander CSS -->
        <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/plugins/fullcalendar/fullcalendar.min.css">
		<!-- Main CSS -->
		<link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/style.css">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="{{ asset('/') }}frontend/assets/js/html5shiv.min.js"></script>
			<script src="{{ asset('/') }}frontend/assets/js/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">
			<!-- Header -->
			<header class="header">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="{{ url('/') }}" class="navbar-brand logo">
							<img src="{{ asset('/') }}frontend/assets/img/logo.png" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="{{ url('/') }}" class="menu-logo">
								<img src="{{ asset('/') }}frontend/assets/img/logo.png" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li class="active">
								<a href="{{ url('/')}}">Home</a>
							</li>
							<li class="has-submenu">
								<a  href="{{route('search.doctor')}}">Teacher Search</a>
                            </li>
                            @if (!Auth::User())


							<li class="has-submenu">
								<a href="#">Others <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="{{route('doctorSignUpForm')}}">Teacher Register</a></li>
									<li><a href="{{route('login')}}">Teacher Login</a></li>
									<li><a href="{{ route('nurse.signup') }}">Student Register</a></li>
									<li><a href="{{ route('login') }}">Student Login</a></li>
								</ul>
                            </li>
                            @endif
						@auth
                            <li class="has-submenu">
                                <a href="{{ route('user.dashboard') }}">Your Dashboard</a>
                            </li>
								<li class="has-submenu">
									<a class="nav-link header-login" href="{{route('logout')}}">Logout</a>
								</li>
                            @endauth
						</ul>
					</div>
          @if(!Auth::User())
					<ul class="nav header-navbar-rht">
						<li class="nav-item contact-item">
							<div class="header-contact-img">
								<i class="far fa-hospital"></i>
							</div>
							<div class="header-contact-detail">
								<p class="contact-header">Contact</p>
								<p class="contact-info-header">{{ $settings->site_phnNumber }}</p>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link header-login" href="{{route('login')}}">Login</a>
						</li>
						<li class="nav-item">
							<a class="nav-link header-login" href="{{route('nurse.signup')}}">Student Register</a>
						</li>
					</ul>
         @endif
      	</nav>
			</header>
            <!-- /Header -->
