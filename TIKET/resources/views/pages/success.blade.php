@extends('layouts.default')

@section('content')
	<div id="admin">
	<div class="row">
		<div class="col-md-12">
			{{ csrf_field() }}
				<div class="col-md-12">
					<h1 class="coming-soon">Success!</h1>
				</div>

				<div class="col-md-12">
					<p>Anda telah mengonfirmasi pembayaran kepada kami, mohon tunggu konfirmasi dari admin!</p>
				</div>
		</div>
	</div>
	</div>
@stop