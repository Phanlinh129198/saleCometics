<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hà Linh Comestics </title>
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{asset('http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/source/assets/dest/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/source/assets/dest/vendors/colorbox/example3/colorbox.css')}}">
	<link rel="stylesheet" href="{{asset('public/source/assets/dest/rs-plugin/css/settings.css')}}">
	<link rel="stylesheet" href="{{asset('public/source/assets/dest/rs-plugin/css/responsive.css')}}">
	<link rel="stylesheet" title="style" href="{{asset('public/source/assets/dest/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('public/source/assets/dest/css/animate.css')}}">
	<link rel="stylesheet" title="style" href="{{asset('public/source/assets/dest/css/huong-style.css')}}">

	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- css files -->
<link rel="stylesheet" href="{{asset('public/css/font-awesome.css')}}"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="public/css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<!-- //css files -->
<!-- web-fonts -->
<link href="public/fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700" rel="stylesheet">
<link href="public/fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700" rel="stylesheet">
</head>
<body>
	
	@include('header')
	<div class="rev-slider">
		@yield('content')	
	@include('footer')


	<!-- include js files -->
	<script src="{{asset('public/source/assets/dest/js/jquery.js')}}"></script>
	<script src="{{asset('public/source/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js')}}"></script>
	<script src="{{asset('http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/source/assets/dest/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
	<script src="{{asset('public/source/assets/dest/vendors/colorbox/jquery.colorbox-min.js')}}"></script>
	<script src="{{asset('public/source/assets/dest/vendors/animo/Animo.js')}}"></script>
	<script src="{{asset('public/source/assets/dest/vendors/dug/dug.js')}}"></script>
	<script src="{{asset('public/source/assets/dest/js/scripts.min.js')}}"></script>
	<script src="{{asset('public/source/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
	<script src="{{asset('public/source/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
	<script src="{{asset('public/source/assets/dest/js/waypoints.min.js')}}"></script>
	<script src="{{asset('public/source/assets/dest/js/wow.min.js')}}"></script>
	<script src = "{{asset('public/css/style.css')}}"></script>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<!--customjs-->
	<script src="('public/source/assets/dest/js/custom2.js')"></script>
	<script>
	$(document).ready(function($) {    
		$(window).scroll(function(){
			if($(this).scrollTop()>150){
			$(".header-bottom").addClass('fixNav')
			}else{
				$(".header-bottom").removeClass('fixNav')
			}}
		)
	})
	</script>
</body>
</html>
