@extends('layouts.default')
@section('content')
<div id="tracking-content">
	<div class="row">
		
		<div class="col-md-12">
			<h1 class="coming-soon">Tracking Pembelian</h1>
		</div>
		<div>	
		<form method="POST" action="../public/tracking">
		{{ csrf_field() }}
			<div class="col-md-12">
				<div class="form-group">
				    <label for="email">Email</label>
				    <input required type="email" class="form-control" id="email" name="email-peserta">
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
				    <label for="nomor-transaksi">Nomor Referensi</label>
				    <input required type="integer" class="form-control" id="nomor-transaksi" name="nomor-transaksi">
				</div>
			</div>
			<div class="col-md-12">
			<p> Pastikan email dan nomor referensi anda sudah benar! </p>
				<div class="form-group">
				    <input required type="submit" class="btn btn-buy" value="Telusuri" id="pwd">
				</div>
			</div>
		</form>
		</div>
	</div>
</div>
@stop