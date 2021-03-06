<?php 
	include 'head.php';
?>
 
<body class="wrapper">
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
<div id="buy-ticket">
	<div class="row">
		<form>
		
		<div class="col-md-12">
			<h1>Pembelian Tiket Online</h1>
		</div>
		
		<div class="col-md-6">
			<div class="form-group">
			    <label for="nama">Nama Pemesan:</label>
			    <input required type="text" class="form-control" id="email">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
			    <label for="email">Email</label>
			    <input required type="email" class="form-control" id="pwd">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
			    <label for="no-identitas">Nomor Identitas:</label>
			    <input required type="text" class="form-control" id="no-identitas">
			</div>
		</div>
			<div class="col-md-6"> 
		  	<div class="form-group">
		    <label for="jumlahTiket">Jenis Identitas</label>
		    <select required id="jumlahTiket" class="form-control selectpicker">
		    	<option class="styled-option">KTP</option>
		    	<option class="styled-option">Kartu Pelajar</option>
		    	<option class="styled-option">SIM</option>
		    	<option class="styled-option">Lainnya</option>
		    	
		    </select>
			</div>
		</div>
	  	<div class="col-md-12"> 
		  	<div class="form-group">
			    <label for="nomer-hp">Nomor HP</label>
			    <input required type="number" class="form-control" placeholder="085711111111" style="font-style: 'QuickSand'">
		 	</div>
	 	</div>
	   	<div class="col-md-12"> 
		  	<div class="form-group">
		    <label for="jumlahTiket">Jumlah Tiket</label>
		    <select required id="jumlahTiket" value="1" class="form-control selectpicker">
		    	<option>1</option>
		    	<option>2</option>
		    	<option>3</option>
		    	<option>4</option>
		    	<option>5</option>
		    </select>
			</div>
		</div>
		<div class="col-md-12"> 
			<button id="continue" class="btn btn-buy" onclick="window.location.href='isi-data.php'">Lanjutkan</button>
		</div>
	
	</form>
	</div>
	
</div>
<div class="hidden-small">
	<img src ="app/images/wave.png" class = "img-responsive" style="width: 100%;">
</div>

</body>
<footer>
	<p class="text-center">Copyright &copy; 2017. Tim Sistem Informasi BKUI17</p>
</footer>
<?php include "foot.php";?>