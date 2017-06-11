@extends('layouts.default')
@section('content')
<div id="tracking-content">
	<div class="row">
		
		<div class="col-md-12">
			<h1 class="coming-soon">Tracking Pembelian</h1>
		</div>
		<div>	
		<form method="post">
			<div class="col-md-12">
				<div class="form-group">
				    <label for="email">Email</label>
				    <input required type="email" class="form-control" id="email">
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
				    <label for="nomor-transaksi">Nomor Transaksi</label>
				    <input required type="integer" class="form-control" id="nomor-transaksi">
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
@stop