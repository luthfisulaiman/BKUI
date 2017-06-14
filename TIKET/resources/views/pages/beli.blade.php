@extends('layouts.default')
@section('content')
<div id="buy-tiket">
	<div class="row">
		<form>
		<div class="row">
		<div class="col-md-12">
			@if (isset($belum_beli))
				<p> Tiket tidak ditemukan, kamu harus beli tiket terlebih dahulu! </p>
			@endif
			<h1 class="coming-soon">Pembelian Tiket Online</h1>
		</div>
		
		<div class="col-md-6">
			<div class="form-group">
			    <label for="nama">Nama Pemesan:</label>
			    <input required type="text" class="form-control" id="email">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
			    <label for="email">Email</label>
			    <input required type="email" class="form-control" id="pwd">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
			    <label for="no-identitas">Nomor Identitas:</label>
			    <input required type="text" class="form-control" id="no-identitas">
			</div>
		</div>
			<div class="col-md-6"> 
		  	<div class="form-group">
		    <label for="jumlahTiket">Jenis Identitas</label>
		    <select required id="jumlahTiket" class="form-control selectpicker">
		    	<option class="styled-option">KTP</option>
		    	<option class="styled-option">Kartu Pelajar</option>
		    	<option class="styled-option">SIM</option>
		    	<option class="styled-option">Lainnya</option>
		    	
		    </select>
			</div>
		</div>
	  	<div class="col-md-12"> 
		  	<div class="form-group">
			    <label for="nomer-hp">Nomor HP</label>
			    <input required type="number" class="form-control" placeholder="085711111111" style="font-style: 'QuickSand'">
		 	</div>
	 	</div>
	   	<div class="col-md-12"> 
		  	<div class="form-group">
		    <label for="jumlahTiket">Jumlah Tiket</label>
		    <select required id="jumlahTiket" value="1" class="form-control selectpicker">
		    	<option>1</option>
		    	<option>2</option>
		    	<option>3</option>
		    	<option>4</option>
		    	<option>5</option>
		    </select>
			</div>
		</div>
		<div class="col-md-12"> 
			<button id="continue" class="btn btn-buy" onclick="window.location.href='../public/isi-data'">Lanjutkan</button>
		</div>
		</div>
	</form>
	</div>
	
</div>
@stop