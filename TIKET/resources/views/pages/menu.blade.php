@extends('layouts.home')
@section('content')
	<div class="row" id="head-text">
	  <h1 class="coming-soon text-center wow fadeInDown">Pemesanan Tiket BKUI17</h1>
	</div>

	<div class="row" id="content-section">
		<div class="container">
			<div class="col-md-4"><a href="aktivasi-voucher">
				<div class="inner-wrapper wow fadeInLeft">
					<img src ="images/coupon (2).png" class = "img-responsive" width="120">
					<h2 class="text-menu text-center">Aktivasi Voucher</h2>
				</div>
			</div>

			<div class="col-md-4"><a href="beli">
				<div class="inner-wrapper wow fadeInUp">
					<img src ="images/ticket.png" class = "img-responsive "  width="120">
					<h2 class="text-menu text-center">Beli Tiket</h2></a>
				</div>	
			</div>

			<div class="col-md-4"><a href="tracking">
				<div class="inner-wrapper wow fadeInRight">
					<img src ="images/search.png" class = "img-responsive"  width="120">
					<h2 class="text-menu text-center">Tracking Pembelian</h2>
				</div>
			</div>
		</div>
	</div>
@stop