@extends('layouts.default')
@section('content')
	<div id="payment">
	<div class="row">
		<div class="col-md-12">
		<h1 class="coming-soon">Panduan Pembayaran</h1>
		<h3>Nomor Referensi {{ $pembayar->kode_bayar }}</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h1 class="payment-head"><span class="num-rounded">1.</span> Lakukan Pembayaran Sebelum</h1>
			<div class="thumbnail">
				<div class="modal-body">
					@if (isset($pembayar->waktu_bayar))
						<h4>{{ $pembayar->waktu_bayar }}</h4>
					@endif
				</div>
			</div>	
			<h1 class="payment-head"><span class="num-rounded">3.</span> Konfirmasi Pembayaran</h1>
			<div class="thumbnail">
				<div class="modal-body">
					<p>E-Tiket akan dikirim maksimal 3 hari setelah pembayaran</p>
				<form method="post" action="../public/payment">
					{{ csrf_field() }}
					<input type="submit" class="btn btn-activate" value="Saya sudah membayar" name="submit">
				</form>
				</div>	
			</div>
		</div>
		<div class="col-md-6">
			<h1 class="payment-head"><span class="num-rounded">2.</span> Transfer Ke</h1>
			<div class="thumbnail">
				<div class="modal-header">
			          <h3 class="modal-title"><strong>Bank Mandiri</strong></h3>
	      		</div>
	      		<div class="modal-body">
		        <p>No Rekening : 157-00-0563388-9</p>
		      	</div>

		      	<div class="modal-body">
		        <p> Atas Nama : Bedah Kampus UI</p>
		      	</div>

		      	<div class="modal-footer">
		        <p> Jumlah Pembayaran : 
		        	@if (isset($pembayar->jumlah_bayar))
		        		Rp{{  $pembayar->jumlah_bayar * 20000}}
		        	@endif
		        </p>
		      	</div>
		     
			</div>
	</div>
</div>

</div>
@stop