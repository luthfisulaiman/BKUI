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
		<div class="container">
			<div id="buy-content">
				<div class="row">
					<a href="../tiket/" class="pull-right">Back To Home</a>
					<div class="header col-md-12">
						<h1 class="head-form" style="text-align:"center"; ">Isi Data Peserta</h1>
					</div>
					<form method="post">
						<p>Isilah identitas diri pada form di bawah ini</p>
						<div class="form-group">
						    <label for="name">Nama Pemesan:</label>
						    <input type="text" class="form-control" id="name">
						</div>
						<div class="form-group">
						    <label for="email">Email:</label>
						    <input type="email" class="form-control" id="email">
						</div>
						<div class="form-group">
						    <label for="phone-number">Nomor Telepon:</label>
						    <input type="text" class="form-control" id="phone-number">
						</div>
						<div class="form-group">
						    <label for="address">Alamat:</label>
						    <input type="text" class="form-control" id="address">
						</div>
						<div class="form-group">
						    <label for="school">Asal Sekolah:</label>
						    <input type="address" class="form-control" id="school">
						</div>
						<a href="download-tiket.php">
							<button type="button" value="ticketSubmitted" class="btn btn-activate" name="submitTicket">Submit</button>
						</a>
					</form>
				</div>
			</div>
		</div>
	</body>
	<img src ="app/images/wave.png" class = "img-responsive" style="width: 100%;">
	<footer>
		<p class="text-center">Copyright &copy; 2017. Tim Sistem Informasi BKUI17</p>
	</footer>
	<?php include "foot.php";