<?php $__env->startSection('content'); ?>
<div class="container">
	<div id="buy-content">
		<div class="row">
			<a href="../tiket/" class="pull-right">Back To Home</a>
			<div class="header col-md-12">
				<h1 class="head-form" style="text-align:"center"; ">Isi Data Peserta</h1>
			</div>
			<form method="post">
				<p>Isilah identitas diri pada form di bawah ini</p>
				<div class="form-group">
				    <label for="name">Nama Pemesan:</label>
				    <input type="text" class="form-control" id="name">
				</div>
				<div class="form-group">
				    <label for="email">Email:</label>
				    <input type="email" class="form-control" id="email">
				</div>
				<div class="form-group">
				    <label for="phone-number">Nomor Telepon:</label>
				    <input type="text" class="form-control" id="phone-number">
				</div>
				<div class="form-group">
				    <label for="address">Alamat:</label>
				    <input type="text" class="form-control" id="address">
				</div>
				<div class="form-group">
				    <label for="school">Asal Sekolah:</label>
				    <input type="address" class="form-control" id="school">
				</div>
				<a href="../public/download-tiket">
					<button type="button" value="ticketSubmitted" class="btn btn-activate" name="submitTicket">Submit</button>
				</a>
			</form>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>