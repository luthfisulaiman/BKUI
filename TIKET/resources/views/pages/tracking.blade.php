@extends('layouts.default')
@section('content')
<div id="tracking-content">
	<div class="row">
		
		<div class="col-md-12">
			<h1 class="coming-soon">Tracking Pembelian</h1>
		</div>
		<div>	
		    @if(isset($belum_beli))
		        <p><b>Mohon maaf, anda tidak terdaftar sebagai pembeli tiket</b></p>
		    @endif
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
			<p> Pastikan email anda sudah benar! </p>
				<div class="form-group">
				    <input required type="submit" class="btn btn-buy" value="Telusuri" id="pwd">
				</div>
			</div>
		</form>
		</div>
	</div>
</div>
@stop