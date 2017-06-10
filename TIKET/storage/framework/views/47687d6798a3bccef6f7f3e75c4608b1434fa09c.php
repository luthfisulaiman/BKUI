<?php $__env->startSection('content'); ?>
<div id="tracking-content">
	<div class="row">
		
		<div class="col-md-12">
			<h1 class="coming-soon">Tracking Tiket</h1>
		</div>
		<div>	
		<form method="post">
			<div class="col-md-12">
				<div class="form-group">
				    <label for="email">Email</label>
				    <input required type="email" class="form-control" id="pwd">
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
				    <label for="nomor-transaksi">Nomor Transaksi</label>
				    <input required type="integer" class="form-control" id="pwd">
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
				    <input required type="submit" class="btn btn-buy" value="Telusuri" id="pwd">
				</div>
			</div>
		</form>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>