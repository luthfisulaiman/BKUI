
@extends('layouts.default')

@section('content')
	<body class="wrapper">
		<div id="tracking-content">
		<div class="row">
			<a href="../public" class="pull-right">Back To Home</a>
			<div class="col-md-12">
				<h1 class="coming-soon">Aktivasi Voucher</h1>
			</div>
			<div method="post">
				<p>Masukkan kode yang terdapat pada tiket voucher</p>
				<form method="POST" action="../public/registrasi-voucher">
					{!! csrf_field() !!}
					<div class="form-group">
						<input type="text"  class="form-control" name="ticketVoucherNumber">
					</div>

					<div class="form-group">
						<a href="../public/registrasi-voucher">
							<button type="button" class="btn btn-activate" value="TicketActivated" name="activateTicket">Aktivasi</button>
						</a>
					</div>
				</form>
			</div>
			</div>
		</div>
	</body>
@stop