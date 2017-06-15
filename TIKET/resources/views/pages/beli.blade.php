@extends('layouts.default')
@section('content')
<div id="buy-tiket">
	<div class="row">
		<form method="POST" action="../public/beli">
		{{ csrf_field() }}
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
			    <input  type="text" class="form-control" id="nama-pemesan" name="nama-pemesan" value="{{ old('nama-pemesan') }}">
			</div>
			<p>{{ $errors->first('nama-pemesan') }}</p>  
		</div>
		<div class="col-md-6">
			<div class="form-group">
			    <label for="email">Email</label>
			    <input type="text" class="form-control" placeholder="Email Address" id="email" name="email" value="{{ old('email') }}">
			    <!--input  type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"-->
			</div>

			<p>{{ $errors->first('email') }}</p>  
		</div>
		<div class="col-md-6">
			<div class="form-group">
			    <label for="no-identitas">Nomor Identitas:</label>
			    <input  type="text" class="form-control" id="no-identitas" name="no-identitas" value="{{ old('no-identitas') }}">
			</div>
			<p>{{ $errors->first('no-identitas') }}</p>  
		</div>
		
			<div class="col-md-6"> 
		  	<div class="form-group">
		    <label for="jenisIdentitas">Jenis Identitas</label>
		    <select required id="jenisIdentitas" class="form-control selectpicker" name="jenisIdentitas">
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
			    <input  type="text" class="form-control" placeholder="628xxxxxxxx" name="nomer-hp" style="font-style: 'QuickSand'" value="{{ old('nomer-hp') }}">
		 	</div>
	 		<p>{{ $errors->first('nomer-hp') }}</p>  
	 	</div>
	 	 
	   	<div class="col-md-12"> 
		  	<div class="form-group">
		    <label for="jumlahTiket">Jumlah Tiket</label>
		    <select required id="jumlahTiket" class="form-control selectpicker" name="jumlahTiket">
		    	<option>1</option>
		    	<option>2</option>
		    	<option>3</option>
		    	<option>4</option>
		    	<option>5</option>
		    </select>
			</div>
		</div>
		<div class="col-md-12"> 
			<input type="submit" class="btn btn-buy" value="Lanjutkan" name="lanjutkan">
		</div>
		</div>
	</form>
	</div>
	
</div>
@stop