<?php $__env->startSection('content'); ?>
<div id="confirm-content">
	
	<div class="row">
	<a href="../public/" class="pull-right">Back To Home</a>
	<br><br>
	<div class="col-md-12">
		<h1 class="coming-soon">Konfirmasi Pembayaran</h1>
	</div>
	<div class="col-md-12">
		<form>
			<div class="row">	
				<div class="col-md-12">
					<div class="form-group">
					    <label for="nama">Nomor Pemesanan :</label>
					    <input required type="text" class="form-control" id="email">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
					    <label for="email">Nama Bank:</label>
					    <input required type="text" class="form-control" id="pwd">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
					    <label for="no-identitas">Nama Pemilik Rekening:</label>
					    <input required type="text" class="form-control" id="no-identitas">
					</div>
				</div>
				<div class="col-md-6"> 
				  	<div class="form-group">
					    <label for="jumlahTiket">Tanggal Transfer:</label>
					    <div class="row">
					   		<div class="col-md-12">	
					   			<input required type="date" class="form-control">
					   		</div>
					   	</div>
					</div>
				</div>
			
		  		<div class="col-md-6"> 
				  	<div class="form-group">
					    <label for="jumlahTiket">Jumlah Pembayaran:</label>
					    <input required type="number" class="form-control" id="amount" placeholder="50000">
			 		</div>
		 		</div>
		 		<div class="col-md-12"> 	 			
                        <label for="upload">Upload Bukti Pembayaran
                        	<input type="file" name ="document" id="document" class="uploadFile">
                        </label>
                        <input type="submit" value = "Upload File" name = "submit" class="btn btn-upload"> 
		 		</div>
		 		
		 		<div class="col-md-12"> 
		 		<br>
			  		 <button id="continue" href="../public/" class="btn btn-pay" style="font-size: 1em;">Submit</button>
				</div>
			</div>
		</form>
	</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>