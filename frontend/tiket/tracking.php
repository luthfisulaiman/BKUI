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
        	<li><a href="#">Back To Home</a></li>
        	<li><a href="#">FAQ</a></li>
            <li><a href="#">Need Help?</a></li>
        	</ul>
      </div>
    </div>
</nav>	 
<div id="tracking-content">
	<div class="row">
		
		<div class="col-md-12">
			<h1 class="coming-soon">Tracking Tiket</h1>
		</div>
		<div>	
		<form method="post">
			<div class="col-md-12">
				<div class="form-group">
				    <label for="email">Email</label>
				    <input required type="email" class="form-control" id="pwd">
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
				    <label for="nomor-transaksi">Nomor Transaksi</label>
				    <input required type="email" class="form-control" id="pwd">
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
				    <input required type="submit" class="btn btn-buy" value="Telusuri" id="pwd">
				</div>
			</div>
		</form>
		</div>
	</div>
</div>
<div class="hidden-small">
	<img src ="app/images/wave.png" class = "img-responsive hidden-small" style="width: 100%;">
</div>

</body>

<footer>
	<p class="text-center">Copyright &copy; 2017. Tim Sistem Informasi BKUI17</p>
</footer>


<?php include "foot.php";?>

