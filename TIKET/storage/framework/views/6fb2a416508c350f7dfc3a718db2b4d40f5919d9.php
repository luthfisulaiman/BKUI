<?php $__env->startSection('content'); ?>
    <div class="row" id="head-text">
  <h1 class="coming-soon text-center wow fadeInDown" data-wow-delay="0.2s">Pemesanan Tiket BKUI17</h1>
 
</div>

<div class="row" id="content-section">
	<div class="container">
	<div class="col-md-4"><a href="ticket-voucher-buy.php">
		<div class="inner-wrapper wow fadeInLeft" data-wow-delay="0.7s">
			<img src ="../public/images/coupon (2).png" class = "img-responsive" width="120">
			<h2 class="text-menu text-center">Aktivasi Voucher</h2>
		</div>
		
	</div>
	<div class="col-md-4"><a href="buy-ticket.php">
	<div class="inner-wrapper wow fadeInUp" data-wow-delay="0.9s">
		<img src ="../public/images/ticket.png" class = "img-responsive "  width="120">
		<h2 class="text-menu text-center">Beli Tiket</h2></a>
	</div>
		
	</div>
	<div class="col-md-4">
		<div class="inner-wrapper wow fadeInRight" data-wow-delay="1.1s">
			<img src ="../public/images/search.png" class = "img-responsive"  width="120">
		<h2 class="text-menu text-center">Lacak Tiket</h2>
		</div>
		
	</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>