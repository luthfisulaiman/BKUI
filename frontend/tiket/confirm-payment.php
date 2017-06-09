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

<div id="buy-content">
	
	<div class="row">
	<a href="../tiket/" class="pull-right">Back To Home</a>
	<br><br>
	<div class="col-md-12">
		<h1 class="coming-soon">Konfirmasi Pembayaran</h1>
	</div>
	<div class="col-md-12">
		<form>
			<div class="row">	
			<div class="col-md-12">
				<div class="form-group">
				    <label for="nama">Nomor Pemesanan :</label>
				    <input required type="text" class="form-control" id="email">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
				    <label for="email">Nama Bank:</label>
				    <input required type="email" class="form-control" id="pwd">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
				    <label for="no-identitas">Nama Pemilik Rekening:</label>
				    <input required type="text" class="form-control" id="no-identitas">
				</div>
			</div>
			<div class="col-md-6"> 
			  	<div class="form-group">
				    <label for="jumlahTiket">Tanggal Transfer:</label>
				    <div class="row">
				   		<div class="col-md-12">	
				   			<input required type="date" class="form-control">
				   		</div>
				   	</div>
				</div>
			</div>
			<div>
		  		<div class="col-md-6"> 
				  	<div class="form-group">
					    <label for="jumlahTiket">Jumlah Pembayaran:</label>
					    <input required type="number" class="form-control" id="amount" placeholder="50000">
			 		</div>
		 		</div>
		 	</div>
		 	<div>
		 		<div class="col-md-12"> 
			  		 <button id="continue" class="btn btn-pay" style="font-size: 1em;">Submit</button>
				</div>
			</div>
		</div>
	</form>
	</div>
</div>
</div>
</body>
<img src ="app/images/wave.png" class = "img-responsive" style="width: 100%;">
	<footer>
		<p class="text-center">Copyright &copy; 2017. Tim Sistem Informasi BKUI17</p>
	</footer>
	<?php include "foot.php";?>
