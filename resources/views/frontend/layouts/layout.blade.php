@php

    $generlaSetting = \App\Models\GeneralSetting::first();
	$setting = \App\Models\SeoSetting::first();
@endphp

<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="{{@$setting->description}}">
	<meta name="keywords" content="{{@$setting->keywords}}">
	<title>{{@$setting->title}}</title>
	<link rel="shortcut icon" type="image/ico" href="{{asset($generlaSetting->favicon)}}" />
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/normalize.css')}}">
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/style-plugin-collection.css')}}">
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/theme.css')}}">
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>
	<div class="preloader">
		<img src="{{ asset('frontend/assets/images/preloader.gif')}}" alt="">
	</div>

    @include('frontend.layouts.navbar')

	<div class="main_wrapper" data-bs-spy="scroll" data-bs-target="#main_menu_area" data-bs-root-margin="0px 0px -40%"
		data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary" tabindex="0">

    @yield('content')



        @include('frontend.layouts.footer')
	</div>


	<script src="{{ asset('frontend/assets/js/vendor/jquery-min.js')}}"></script>
	<script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{ asset('frontend/assets/js/contact-form.js')}}"></script>
	<script src="{{ asset('frontend/assets/js/jquery-plugin-collection.js')}}"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script src="{{ asset('frontend/assets/js/vendor/modernizr.js')}}"></script>
	<script src="{{ asset('frontend/assets/js/main.js')}}"></script>
	
	@stack('scripts')
</body>

</html>