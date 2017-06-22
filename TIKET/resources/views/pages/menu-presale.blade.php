@extends('layouts.home')
@section('content')
	<div class="row" id="head-text">
	  <h1 class="coming-soon text-center wow fadeInDown">Pemesanan Tiket BKUI17</h1>
	</div>

	<div class="row" id="content-section">
		<div class="container">
			<a href="beli"><div class="col-md-6">
				<div class="inner-wrapper wow fadeInLeft">
					<img src ="images/ticket.png" class = "img-responsive "  width="120">
					<h2 class="text-menu text-center">Beli Tiket</h2></a>
				</div>
			</div></a>

			<a href="tracking"><div class="col-md-6">
				<div class="inner-wrapper wow fadeInRight">
					<img src ="images/search.png" class = "img-responsive"  width="120">
					<h2 class="text-menu text-center">Tracking Pembelian</h2>
				</div>
			</div></a>
		</div>
	</div>
	
	<div id='faq'>
	    <h3 class='text-center'><b>Frequently Asked Questions</b></h3>
	<div class="panel-group" id="accordion">
	  <div class="panel panel-default">
	   
	    <div class="panel-heading">
	    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
	      <h4 class="panel-title">
	          1. Kak, kode referensi itu buat apa ya? wajib diisi nggak?
	      </h4>
	    </div></a>
	    <div id="collapse1" class="panel-collapse collapse in">
	      <div class="panel-body">
	          Kode referensi wajib dicantumkan untuk identifikasi pembayaran. Umumnya, kamu akan diminta memasukkan nomor referensi setelah mengisi nomor rekening yang dituju.
	       </div>
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <div class="panel-heading">
	    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
	    <h4 class="panel-title">
	        2.	Kak kok aku buka web udah nggak bisa di akses ya pembelian tiketnya?
	    </h4></a>
	    </div>
	    <div id="collapse2" class="panel-collapse collapse">
	      <div class="panel-body">Jika tidak dapat diakses berarti tiket yang tersedia sudah habis. Namun, jangan khawatir! Kamu masih bisa mendapatkan tiket BKUI17 dengan membeli tiket normal yang akan dibuka bulan Juli nanti.</div>
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <div class="panel-heading">
	    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
	    <h4 class="panel-title">
	        3.	Kak tiket promo cuma untuk 1 orang atau aku bisa pesan banyak untuk teman-teman aku juga?
	    </h4></a>
	    </div>
	    <div id="collapse3" class="panel-collapse collapse">
	      <div class="panel-body"> Setiap orang dapat membeli maksimum 5 tiket. Jadi, kamu bisa mengajak teman – temanmu untuk membeli tiket bersama kamu.</div>
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <div class="panel-heading">
	    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
	    <h4 class="panel-title">
	        4.	Kak kalau aku bayarnya lebih dari 1x24 jam boleh kak?
	    </h4></a>
	    </div>
	    <div id="collapse4" class="panel-collapse collapse">
	      <div class="panel-body">Maksimal pembayaran 1x24 jam ya. Kami tidak menjamin kamu akan mendapat tiket jika melebih 1x24 jam karena siapa cepat dia dapat.</div>
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <div class="panel-heading">
	    <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
	    <h4 class="panel-title">
	        5.	Kak ini acaranya kapan ya? 
	    </h4></a>
	    </div>
	    <div id="collapse5" class="panel-collapse collapse">
	      <div class="panel-body">Bedah Kampus UI 17 akan dilaksanakan pada tanggal 11 – 12 November 2017. Hari pertama untuk tiket IPS dan hari kedua untuk tiket IPA.</div>
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <div class="panel-heading">
	    <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
	    <h4 class="panel-title">
	        6.	Kak kalau aku lupa download setelah konfirmasi pembayaran bagaimana?
	    </h4></a>
	    </div>
	    <div id="collapse6" class="panel-collapse collapse">
	      <div class="panel-body">Tiket akan juga dikirimkan vie e-mail. Kamu juga dapat mendownload kembali di halaman tracking tiket dengan memasukan email dan nomer transaksi.</div>
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <div class="panel-heading">
	    <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
	    <h4 class="panel-title">
	        7.	Kak websitenya tidak dapat diakses, bagaimana?
	    </h4></a>
	    </div>
	    <div id="collapse7" class="panel-collapse collapse">
	      <div class="panel-body">Jika terdapat error pada website silahkan hubungi kontak tim SI BKUI yang tertera pada menu Need Help</div>
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <div class="panel-heading">
	    <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
	    <h4 class="panel-title">
	        8.	Kak cara pembelian tiket bagaimana ya? 
	    </h4></a>
	    </div>
	    <div id="collapse8" class="panel-collapse collapse">
	      <div class="panel-body"><p>Kamu bisa melihat panduan lengkapnya di link di bawah ini</p>
	     <a class="btn btn-buy">Download Panduan</a>
	      </div>
	      
	      </div>
	  </div>
	  <div class="panel panel-default">
	    <div class="panel-heading">
	    <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">
	    <h4 class="panel-title">
	    	9.	Kak, kok kuotanya sudah habis ya? Aku bisa masih dapet tiket promo nggak?
	    </h4></a>
	    </div>
	    <div id="collapse9" class="panel-collapse collapse">
	      <div class="panel-body"><p>Mohon maaf, kami hanya menyediakan 1000 tiket promo. Namun, jangan khawatir! Kamu masih bisa mendapatkan tiket BKUI17 dengan membeli tiket normal yang akan dibuka bulan Juli nanti.</p>
	      </div>
	      
	      </div>
	  </div>
	  </div>
	  
	  </div>
	  
	</div>
	</div>
@stop