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

<div class="header" id="activate-content">
	<div class="row">
		
		<div class="col-md-12">
			<h1 class="coming-soon">Aktivasi Voucher</h1>
		</div>
		<div method="post">
			<p>Masukkan kode yang terdapat pada tiket voucher</p>
			<form>
				<div class="form-group">
					<input type="text"  class="form-control" name="ticketVoucherNumber">
					
				</div>
				<a href="ticket-voucher-buy-registration.php">
					<button type="button" class="btn btn-buy" value="TicketActivated" name="activateTicket">Aktivasi</button>
				</a>
			</form>
		</div>
	</div>
</div>
</div>
<div class="hidden-small">
	<img src ="app/images/wave.png" class = "img-responsive" style="width: 100%;">
</div>

<footer>
	<p class="text-center">Copyright &copy; 2017. Tim Sistem Informasi BKUI17</p>
</footer>

</body>


<?php include "foot.php";?>

