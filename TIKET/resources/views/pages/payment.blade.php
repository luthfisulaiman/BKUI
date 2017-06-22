@extends('layouts.default')
@section('content')
	<div id="payment"
	<div class="row">
		<div class="col-md-12">
			<h1 class="coming-soon">Panduan Pembayaran</h1>
			@if (isset($pembayar->nama))
	            <h3>Nama anda: {{ ucwords($pembayar->nama) }}</h3>
	        @endif
	        @if (isset($pembayar->kode_bayar))
			    <h3><b>Kode Referensi {{ $pembayar->kode_bayar }}</b></h3>
			@endif
			<p>Harap mencatat Kode referensi anda karena nomor ini wajib dimasukkan ketika transfer</p>
		</div>
		<div class="col-md-12">
			<h1 class="payment-head"><span class="num-rounded">1.</span> Lakukan Pembayaran Sebelum</h1>
			<div class="thumbnail">
				<div class="modal-body">
					@if (isset($pembayar->waktu_bayar))
						<h4 class="text-center">{{ $pembayar->waktu_bayar }}</h4>
					@endif
				</div>
			</div>	
		</div>
		<div class="col-md-12">
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
		        <p><b>Harap transfer sesuai dengan jumlah pembayaran yang tertera!</b></p>
		        <p><b>Jumlah pembayaran yang tidak sesuai tidak akan diproses</b></p>
		      	</div>
		     
			</div>
	    </div>
	    <div class="col-md-12">
			<h1 class="payment-head"><span class="num-rounded">3.</span> Pengiriman Bukti Transfer</h1>
			<div class="thumbnail">
				<div class="modal-header">
					<p>Kamu diwajibkan mengirimkan bukti transfer atau print buku tabungan (mutasi) ke e-mail info@bedahkampusui.com dengan ketentuan: </p>
                    
                </div>
                <div class="modal-body">
                    <p>Subject : BUKTI TRANSFER BKUI17</p>
                    <p>Nama Lengkap Pemesan:</p>
                    <p>Nomor Referensi:</p>
                    <p>Email:</p>
                    <p>Nama Pemilik Rekening:</p>
                    <p>Jumlah Tiket Yang Dipesan:</p>
                    <p>No HP:</p>
				</div>
			</div>	
		</div>
    	<div class="col-md-12">
    		<h1 class="payment-head"><span class="num-rounded">4.</span> Konfirmasi Pembayaran</h1>
    		    @if (isset($pembayar->isPaid))
    		    @if ($pembayar->isPaid == 0)
    			    <div class="thumbnail">
    				    <div class="modal-body">
    					    <p>E-Tiket akan dikirim maksimal 3 hari setelah pembayaran</p>
    				        <form method="post" action="payment" class="text-center">
    					        {{ csrf_field() }}
    					        <input type="submit" class="btn btn-activate" value="Saya sudah membayar" name="submit">
    				        </form>
    				    </div>	
    			    </div>
    			@endif
    			@if ($pembayar->isPaid == 1)
    			    <div class="thumbnail">
    				    <div class="modal-body">
    					    <h3 style="color:green;">Terima Kasih! </h3>
    					    <p>Anda telah melakukan konfirmasi pembayaran. Harap tunggu konfirmasi dari panitia kami ya.</p>
    				        
    				    </div>	
    			    </div>
    			@endif
    			@endif
    			
    	</div>
	</div>
</div>

</div>
@stop