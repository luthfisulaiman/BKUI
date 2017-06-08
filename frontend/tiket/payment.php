<?php 
	include 'head.php';
?>
<nav class="navbar-default navbar-head">
	<div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        
      </div>

      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right menu-top-right" id="nav-right">
        	<li><a href="#"> Back To Home</a></li>
        	<li><a href="#"> FAQ</a></li>
            <li><a href="#">Need Help?</a></li>
        	</ul>
      </div>
    </div>
</nav>	 
<body class="wrapper">
	<div id="payment">
	<div class="row">
		<div class="col-md-12">
		<h1 class="coming-soon">Panduan Pembayaran</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h1 class="payment-head"><span class="num-rounded">1.</span> Lakukan Pembayaran Sebelum</h1>
			<div class="thumbnail">
				<div class="modal-body">
					<h4>Besok 15.06</h4>
				</div>
			</div>	
			<h1 class="payment-head"><span class="num-rounded">3.</span> Konfirmasi Pembayaran</h1>
			<div class="thumbnail">
				<div class="modal-body">
					<p>E-Tiket akan dikirim maksimal 3 hari setelah pembayaran</p>
				<button id="continue" class="btn btn-pay">Saya Sudah Membayar</button>
				</div>	
			</div>
		</div>
		<div class="col-md-6">
			<h1 class="payment-head"><span class="num-rounded">2.</span> Transfer Ke</h1>
			<div class="thumbnail">
				<div class="modal-header">
			          <h3 class="modal-title"><strong>BNI</strong></h3>
	      		</div>
	      		<div class="modal-body">
		        <p>No Rekening :</p>
		      	</div>

		      	<div class="modal-body">
		        <p> Atas Nama :</p>
		      	</div>

		      	<div class="modal-footer">
		        <p> Jumlah Pembayaran :</p>
		      	</div>
		     
			</div>
	</div>


	<div class="row">
		
		</div>
		
	</div>

	<div class="row">
		
			
			
		</div>
	</div>

	</div>
</body>
<img src ="app/images/wave.png" class = "img-responsive" style="width: 100%;">
<footer>
	<p class="text-center">Copyright &copy; 2017. Tim Sistem Informasi BKUI17</p>
</footer>


<?php include "foot.php";?>