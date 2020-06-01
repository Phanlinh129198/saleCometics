@extends('master')
@section('content')

		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản phẩm {{$getDetailType -> name}}</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('trang-chu')}}">Home</a> / <span> {{$getDetailType -> name}}</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-3">
						@foreach($productType as $proType)
						<ul class="aside-menu">
							<li><a href="{{route('loai-san-pham',$proType -> id)}}">{{$proType -> name}}</a></li>
						</ul>
						@endforeach
					</div>
					<div class="col-sm-9">
						<div class="beta-products-list">
							<h4>New Products</h4>
							<div class="beta-products-details">
								<p class="pull-left">{{count($loaiSP)}} styles found</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								@foreach($loaiSP as $sp)
								<div class="col-sm-4">
									<div class="single-item">
										<div class="single-item-header">
											<a href="{{route('chi-tiet-san-pham',$sp->id)}}"><img src="{!! asset('public/source/image/product/' .$sp['image']) !!}" alt="{{ $sp->name }}" /></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$sp -> name}}</p>
											<p class="single-item-price">
											@if($sp -> promotion_price == 0)
												<span class = "flash-sale">{{$sp -> unit_price}}</span>
												 @else
												 <span class = "flash-del">{{$sp -> unit_price}}</span>
												 <span class = "flash-sale">{{$sp -> promotion_price}}</span>
												 @endif
												
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('chi-tiet-san-pham',$sp->id)}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
							
							</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Other Products</h4>
							<div class="beta-products-details">
								<p class="pull-left">{{count($SP_khac)}} styles found</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@foreach($SP_khac as $other)
								<div class="col-sm-4">
									<div class="single-item">
										<div class="single-item-header">
											<a href="{{route('chi-tiet-san-pham',$other->id)}}"><img src="{!! asset('public/source/image/product/' .$other['image']) !!}" alt="{{$other->name}}"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$other -> name}}</p>
											<p class="single-item-price">
											@if($other -> promotion_price == 0)
												<span class = "flash-sale">{{$other -> unit_price}}</span>
												 @else
												 <span class = "flash-del">{{$other -> unit_price}}</span>
												 <span class = "flash-sale">{{$other -> promotion_price}}</span>
												 @endif
												
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('chi-tiet-san-pham',$other->id)}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
							
							</div>
							<div class="row">{{$SP_khac->links()}}</div>
							<div class="space40">&nbsp;</div>
							
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
    </div> <!-- .container -->
@endsection