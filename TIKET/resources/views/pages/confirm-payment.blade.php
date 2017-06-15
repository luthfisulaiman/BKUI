@extends('layouts.default')
@section('content')
<div id="confirm-content">
	
	<div class="row">
	<div class="col-md-12">
		<h1 class="coming-soon">Konfirmasi Pembayaran</h1>
	</div>
	<div class="col-md-12">
		<form method="POST" action="../public/confirm-payment">
		{{ csrf_field() }}
			<div class="row">	
				<div class="col-md-12">
					<div class="form-group">
					    <label for="nama">Nomor Referensi : </label>
					    <input required type="text" class="form-control" id="referensi" name="referensi" value="{{ Session::get('dataPembayar')->kode_bayar }}" readonly="">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
					    <label for="email">Nama Bank:</label>
					    <input required type="text" class="form-control" id="nama-bank" name="namabank"> 
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
					    <label for="no-identitas">Nama Pemilik Rekening:</label>
					    <input required type="text" class="form-control" id="no-rekening" name="noRekening">
					</div>
				</div>
				<div class="col-md-6"> 
				  	<div class="form-group">
					    <label for="jumlahTiket">Tanggal Transfer:</label>
					    <div class="row">
					   		<div class="col-md-12">	
					   			<input required type="date" class="form-control" name="tanggal">
					   		</div>
					   	</div>
					</div>
				</div>
			
		  		<div class="col-md-6"> 
				  	<div class="form-group">
					    <label for="jumlahTiket">Jumlah Pembayaran:</label>
					    <input required type="number" class="form-control" id="amount" name="amount">
			 		</div>
		 		</div>
		 		
		 		<div class="col-md-12"> 
		 		<br>
			  		 <button id="continue" class="btn btn-pay" style="font-size: 1em;">Submit</button>
				</div>
			</div>
		</form>
	</div>
	</div>
</div>
@stop