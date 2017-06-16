@extends('layouts.default')
@section('content')
<div id="tracking-content">
	<div class="row">
		
		<div class="col-md-12">
			<h1 class="coming-soon">Tracking Pembelian</h1>
		</div>
		<div>	
		<form method="POST" action="tracking">
		{{ csrf_field() }}
			<div class="col-md-12">
				<div class="form-group">
				    <label for="email">Email</label>
				    <input type="email" class="form-control" id="email" name="email-peserta">
				</div>
				<p>{{ $errors->first('email-peserta') }}</p>  
			</div>
			<div class="col-md-12">
				<div class="form-group">
				    <label for="nomor-transaksi">Nomor Referensi</label>
				    <input type="integer" class="form-control" id="nomor-transaksi" name="nomor-transaksi">
				</div>
				<p>{{ $errors->first('nomor-transaksi') }}</p>  
			</div>
			<div class="col-md-12">
			<p> Pastikan email dan nomor referensi anda sudah benar! </p>
			@if (isset($belum_beli))
				<p> Tiket tidak ditemukan, kamu harus beli tiket terlebih dahulu! </p>
			@endif
				<div class="form-group">
				    <input required type="submit" class="btn btn-buy" value="Telusuri" id="pwd">
				</div>
			</div>
		</form>
		</div>
	</div>
</div>
@stop