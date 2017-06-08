<?php
	include 'head.php';
?>
	<body class="wrapper">
		<div class="container">
			<div class="header" id="buy-content">
				<div class="row">
					<a href="/BK-Ganteng/frontend/tiket/" class="pull-right">Back To Home</a>
					<div class="col-md-12">
						<h1 class="head-form">Aktivasi Voucher</h1>
					</div>
					<div method="post">
						<p>Masukkan kode yang terdapat pada tiket voucher</p>
						<form>
							<div class="form-group">
								<input type="text"  class="form-control" name="ticketVoucherNumber">
							</div>

							<div class="form-group">
								<a href="ticket-voucher-buy-registration.php">
									<button type="button" class="btn btn-activate" value="TicketActivated" name="activateTicket">Aktivasi</button>
								</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
	<img src ="app/images/wave.png" class = "img-responsive"  >
	<footer>
		<p class="text-center">Copyright &copy; 2017. Tim Sistem Informasi BKUI17</p>
	</footer>
	<?php include "foot.php";
