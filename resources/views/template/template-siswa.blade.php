<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>
        @yield('title')
    </title>
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('logo.png') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/feathericon.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('../../../releases/v5.8.2/css/all.css')}}">
</head>
<body>
	<div class="main-wrapper">
		<div class="header">
			<div class="header-left">
				<a href="/" class="logo"> <img src="{{ asset('logo.png') }}" width="50" height="70" alt="logo"> <span class="logoclass">Menu</span> </a>
				<a href="/" class="logo logo-small"> <img src="{{ asset('logo.png') }}" alt="Logo" width="30" height="30"> </a>
			</div>
		</div>
		<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				@include('partisi.sidebar-siswa')
			</div>
		</div>
		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
                    @yield('content')
                </div>
			</div>
		</div>
	</div>

	<script src="{{ asset ('assets/js/jquery-3.5.1.min.js') }}"></script>

    <script src="{{ asset ('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset ('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset ('assets/js/moment.min.js')}}"></script>
    <script src="{{ asset ('assets/js/select2.min.js')}}"></script>

    <script src="{{ asset ('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{ asset ('assets/plugins/raphael/raphael.min.js')}}"></script>

    <script src="{{ asset ('assets/js/bootstrap-datetimepicker.min.js')}}"></script>

    <script src="{{ asset ('assets/js/script.js') }}"></script>
</body>
@include('sweetalert::alert')
</html>
