@extends('layouts.home')
@section('content')
<div id="faq">
	<h1 class="coming-soon">Frequenly Asked Questions</h1>
	<div class="panel-group" id="accordion">
	  <div class="panel panel-default">
	   
	    <div class="panel-heading">
	    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
	      <h4 class="panel-title">
	        1.  Kak, kok kuotanya sudah habis ya? Aku bisa masih dapet tiket promo nggak?
	      </h4>
	    </div></a>
	    <div id="collapse1" class="panel-collapse collapse in">
	      <div class="panel-body">Mohon maaf, kami hanya menyediakan 1000 tiket promo. Namun, jangan khawatir! Kamu masih bisa mendapatkan tiket BKUI17 dengan membeli tiket normal yang akan dibuka bulan Juli nanti. </div>
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
	     <a href="https://drive.google.com/file/d/0B_zPI0CVg3dWbmtJek5Nek45aDA/view?usp=sharing" class="btn btn-buy">Lihat Panduan</a>
	      </div>
	      
	      </div>
	  </div>
	  <div class="panel panel-default">
	    <div class="panel-heading">
	    <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">
	    <h4 class="panel-title">
	    	9. Kak, kode referensi itu buat apa ya? wajib diisi nggak? 
	    </h4></a>
	    </div>
	    <div id="collapse9" class="panel-collapse collapse">
	      <div class="panel-body"><p>Kode referensi wajib dicantumkan untuk identifikasi pembayaran. Umumnya, kamu akan diminta memasukkan nomor referensi setelah mengisi nomor rekening yang dituju.</p>
	      </div>
	      
	      </div>
	  </div>
	  
	  <div class="panel panel-default">
	    <div class="panel-heading">
	    <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">
	    <h4 class="panel-title">
	    	10. Kak, apa saja yang perlu aku siapkan untuk beli tiket BKUI17?
	    </h4></a>
	    </div>
	    <div id="collapse10" class="panel-collapse collapse">
	      <div class="panel-body"><p>Nama lengkap, e-mail, dan nomor hp untuk setiap peserta. Jika ada 5 tiket yang dibeli, maka persiapkan data diri masing – masing pemegang tiket.</p>
	      </div>
	      </div>
	  </div>
	  
	  <div class="panel panel-default">
	    <div class="panel-heading">
	    <a data-toggle="collapse" data-parent="#accordion" href="#collapse11">
	    <h4 class="panel-title">
	    	11. Kak, jika pakai m-banking dan i-banking aku nggak bisa masukin nomor referensi, bagaimana kak?
	    </h4></a>
	    </div>
	    <div id="collapse11" class="panel-collapse collapse">
	      <div class="panel-body"><p>Nomor referensi wajib digunakan. Jika memang benar-benar tidak bisa, dalam keterangan transfer dapat diisi dengan “(Nama kamu)-Tiket BKUI17”. Kami tidak dapat mengkonfirmasi pembayaran dan mengirimkan tiket jika tidak terdapat nomor referensi atau keterangan transfer.</p>
	      </div>
	      </div>
	  </div>
	  
	  <div class="panel panel-default">
	    <div class="panel-heading">
	    <a data-toggle="collapse" data-parent="#accordion" href="#collapse12">
	    <h4 class="panel-title">
	    	12. Kak, nomor identitas pakai apa ya? Aku nggak punya KTP, SIM, dan kartu pelajar.
	    </h4></a>
	    </div>
	    <div id="collapse12" class="panel-collapse collapse">
	      <div class="panel-body"><p>Kamu bisa menggunakan NIK di kartu keluarga kamu. Pasti punya dong~ </p>
	      </div>
	      </div>
	  </div>
	  
	  <div class="panel panel-default">
	    <div class="panel-heading">
	    <a data-toggle="collapse" data-parent="#accordion" href="#collapse13">
	    <h4 class="panel-title">
	    	13. Kak, e-mail yang aku masukin salah, aku harus apa?
	    </h4></a>
	    </div>
	    <div id="collapse13" class="panel-collapse collapse">
	      <div class="panel-body"><p>tiket akan kami kirimkan ke e-mail yang telah kamu cantumkan namun kamu bisa mengunduh tiket dengan tracking pembelian jika memang tiket tidak sampai pada e-mail kamu. </p>
	      </div>
	      </div>
	  </div>
	  
	  <div class="panel panel-default">
	    <div class="panel-heading">
	    <a data-toggle="collapse" data-parent="#accordion" href="#collapse14">
	    <h4 class="panel-title">
	    	14. Tiketnya dikirim kapan,kak?
	    </h4></a>
	    </div>
	    <div id="collapse14" class="panel-collapse collapse">
	      <div class="panel-body"><p>Nama lengkap, e-mail, dan nomor hp untuk setiap peserta. Jika ada 5 tiket yang dibeli, maka persiapkan data diri masing – masing pemegang tiket.</p>
	      </div>
	      </div>
	  </div>
	  
	  <div class="panel panel-default">
	    <div class="panel-heading">
	    <a data-toggle="collapse" data-parent="#accordion" href="#collapse15">
	    <h4 class="panel-title">
	    	15. Kak, aku transfernya double, bisa dibalikin uangnya kak?
	    </h4></a>
	    </div>
	    <div id="collapse15" class="panel-collapse collapse">
	      <div class="panel-body"><p>Bisa, kamu simpan buktinya ya, nanti akan kamu verifikasi dan jika memang benar akan kami refund di hari H pelaksanaan BKUI17. </p>
	      </div>
	      </div>
	  </div>
	  
	  <div class="panel panel-default">
	    <div class="panel-heading">
	    <a data-toggle="collapse" data-parent="#accordion" href="#collapse16">
	    <h4 class="panel-title">
	    	16. Kak, cara konfirmasi pembayaran bagaimana ya?
	    </h4></a>
	    </div>
	    <div id="collapse16" class="panel-collapse collapse">
	      <div class="panel-body"><p>Silahkan klick tracking pembelian.</p>
	      </div>
	      </div>
	  </div>
	  
	 </div>
	  
	  </div>
	  
	</div>
</div>
@stop