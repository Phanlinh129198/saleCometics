@extends('master')
@section('content')

<section class="login-block">
	<div class="container">
		<div class="row" style="margin-top: 10px; margin-bottom:30px">
			<div class="col-md-4 login-sec" style="margin-top: 40px;">
				<h2 class="text-center" >LOGIN</h2>
				<form class="login-form">
					<div class="form-group">
					<label for="email">Email address*</label>
						<input type="text" class="form-control" >

					</div>
					<div class="form-group">
					<label for="phone">Password*</label>
						<input type="password" class="form-control" >
					</div>
					<button type="submit" class="btn btn-primary btn-block ">Login</button>

					

				</form>
				
			</div>
			<div class="col-md-8 banner-sec">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
							<img style = "height:500px" class="d-block img-fluid" src="public/image/1.jpg" alt="First slide">
							<div class="carousel-caption d-none d-md-block">
								<div class="banner-text">
									<h2>This is Heaven</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<img style = "height:500px" class="d-block img-fluid" src="public/image/2.jpg" alt="First slide">
							<div class="carousel-caption d-none d-md-block">
								<div class="banner-text">
									<h2>This is Heaven</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<img style = "height:500px" class="d-block img-fluid" src="public/image/3.jpg" alt="First slide">
							<div class="carousel-caption d-none d-md-block">
								<div class="banner-text">
									<h2>This is Heaven</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
</section>
@endsection