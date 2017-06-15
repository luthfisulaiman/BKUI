@extends('layouts.default')

@section('content')
	
	<div id="tracking-content">
		<div class="row">
			<div class="col-md-12">
				<h1 class="coming-soon">Aktivasi Voucher</h1>
			</div>
			<div>
				@if (isset($salahKodeVoucher))
					<p class="warning-red"><strong>Voucher yang anda masukkan salah</strong></p>
				@endif

				<p>Masukkan kode yang terdapat pada tiket voucher</p>
				<form method="POST" action="../public/aktivasi-voucher">
					{!! csrf_field() !!}
					<div class="form-group">
						<input type="text"  class="form-control" name="ticketVoucherNumber">
					</div>
					<p>{{ $errors->first('ticketVoucherNumber') }}</p>  

					<div class="form-group">
						<input type="submit" class="btn btn-activate" value="Aktivasi" name="activateTicket">
					</div>
				</form>
			</div>
			</div>
		</div>
@stop