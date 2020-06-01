@extends('master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản phẩm {{$SP->name}}</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('trang-chu')}}">Home</a> / <span>{{$SP->name}}</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">

					<div class="row">
						<div class="col-sm-4">
							<img src="{!! asset('public/source/image/product/' .$SP['image']) !!}" alt="{{$SP->name}}">
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title">{{$SP->name}}</p>
								<p class="single-item-price">
								@if($SP -> promotion_price == 0)
												<span class = "flash-sale">{{$SP -> unit_price}}</span>
												 @else
												 <span class = "flash-del">{{$SP -> unit_price}}</span>
												 <span class = "flash-sale">{{$SP -> promotion_price}}</span>
												 @endif
								</p>
							</div>

							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>

							<div class="single-item-desc">
								<p>{{$SP->description}}</p>
							</div>
							<div class="space20">&nbsp;</div>

							<p>Số lượng:</p>
							<div class="single-item-options">
								<select class="wc-select" name="color">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
								<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a href="#tab-description">Mô tả chi tiết</a></li>
						</ul>

						<div class="panel" id="tab-description">
						<p>{{$SP->description}}</p>
						</div>
						
					</div>
					<div class="space50">&nbsp;</div>
					<div class="beta-products-list">
						<h4>Sản phẩm tương tự</h4>

						<div class="row">
						@foreach($SP_tuongtu as $tuongtu)
							<div class="col-sm-4">
								<div class="single-item">
									<div class="single-item-header">
										<a href="{{route('chi-tiet-san-pham',$tuongtu->id)}}"><img src="{!! asset('public/source/image/product/' .$tuongtu['image']) !!}" alt="{{$tuongtu->name}}"></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$tuongtu->name}}</p>
										<p class="single-item-price">
										@if($tuongtu -> promotion_price == 0)
												<span class = "flash-sale">{{$tuongtu -> unit_price}}</span>
												 @else
												 <span class = "flash-del">{{$tuongtu -> unit_price}}</span>
												 <span class = "flash-sale">{{$tuongtu -> promotion_price}}</span>
												 @endif
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="product.html"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						@endforeach
						</div>
					<div class="row">{{$SP_tuongtu->links()}}</div>
					</div> <!-- .beta-products-list -->
				</div>
				<div class="col-sm-3 aside">
					<div class="widget">
						<h3 class="widget-title">Sản phẩm giảm giá</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								@foreach($SP_giamgia as $giamgia)
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="{!! asset('public/source/image/product/' .$giamgia['image']) !!}" alt=""></a>
									<div class="media-body">
										{{$giamgia->name}}
										<span class="beta-sales-price">
										@if($giamgia -> promotion_price == 0)
												<span class = "flash-sale">{{$giamgia -> unit_price}}</span>
												 @else
												 <span class = "flash-del">{{$giamgia -> unit_price}}</span>
												 <span class = "flash-sale">{{$giamgia -> promotion_price}}</span>
												 @endif
										</span>
									</div>
								</div>
								@endforeach
							
							</div>
						</div>
					</div> <!-- best sellers widget -->
					<div class="widget">
						<h3 class="widget-title">Sản phẩm mới</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								@foreach($SP_moi as $moi)
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="{!! asset('public/source/image/product/' .$moi['image']) !!}" alt=""></a>
									<div class="media-body">
										{{$moi -> name}}
										<span class="beta-sales-price">
										@if($moi -> promotion_price == 0)
												<span class = "flash-sale">{{$moi -> unit_price}}</span>
												 @else
												 <span class = "flash-del">{{$moi -> unit_price}}</span>
												 <span class = "flash-sale">{{$moi -> promotion_price}}</span>
												 @endif
										</span>
										</span>
									</div>
								</div>
								@endforeach
								
							</div>
						</div>
					</div> <!-- best sellers widget -->
				</div>
			</div>
		</div> <!-- #content -->
    </div> <!-- .container -->
    @endsection