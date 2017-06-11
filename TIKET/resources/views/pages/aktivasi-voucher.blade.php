@extends('layouts.default')

@section('content')
	<body class="wrapper">
		<div id="tracking-content">
		<div class="row">
			<div class="col-md-12">
				<h1 class="coming-soon">Aktivasi Voucher</h1>
			</div>
			<div>
				@if (isset($salahKodeVoucher))
					@if ($salahKodeVoucher == 'Kode Voucher Salah')
						<p><strong>Voucher yang anda masukkan salah</strong></p>
					@else
						<p><strong>Voucher yang anda masukkan telah digunakan</strong></p>
					@endif
				@endif

				<p>Masukkan kode yang terdapat pada tiket voucher</p>
				<form method="POST" action="../public/aktivasi-voucher">
					{!! csrf_field() !!}
					<div class="form-group">
						<input type="text"  class="form-control" name="ticketVoucherNumber">
					</div>

					<div class="form-group">
						<input type="submit" class="btn btn-activate" value="Aktivasi" name="activateTicket">
					</div>
				</form>
			</div>
			</div>
		</div>
	</body>
@stop