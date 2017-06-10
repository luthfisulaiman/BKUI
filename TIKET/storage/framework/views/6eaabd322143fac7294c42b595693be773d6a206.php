<?php $__env->startSection('content'); ?>
	<div id="payment">
	<div class="row">
		<div class="col-md-12">
		<h1 class="coming-soon">Panduan Pembayaran</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h1 class="payment-head"><span class="num-rounded">1.</span> Lakukan Pembayaran Sebelum</h1>
			<div class="thumbnail">
				<div class="modal-body">
					<h4>Besok <?php
						date_default_timezone_set("Asia/Jakarta");
						echo date("h:i:sa"); "<br>";
						?>
					</h4>
				</div>
			</div>	
			<h1 class="payment-head"><span class="num-rounded">3.</span> Konfirmasi Pembayaran</h1>
			<div class="thumbnail">
				<div class="modal-body">
					<p>E-Tiket akan dikirim maksimal 3 hari setelah pembayaran</p>
				<button id="continue" class="btn btn-pay" onclick="window.location.href='../public/confirm-payment'">Saya Sudah Membayar</button>
				</div>	
			</div>
		</div>
		<div class="col-md-6">
			<h1 class="payment-head"><span class="num-rounded">2.</span> Transfer Ke</h1>
			<div class="thumbnail">
				<div class="modal-header">
			          <h3 class="modal-title"><strong>BNI</strong></h3>
	      		</div>
	      		<div class="modal-body">
		        <p>No Rekening :</p>
		      	</div>

		      	<div class="modal-body">
		        <p> Atas Nama :</p>
		      	</div>

		      	<div class="modal-footer">
		        <p> Jumlah Pembayaran :</p>
		      	</div>
		     
			</div>
	</div>
</div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>