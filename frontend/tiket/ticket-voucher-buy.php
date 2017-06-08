<?php
	include 'head.php';
?>
	<body class="wrapper">
		<div class="container">
			<div class="header" id="buy-content">
				<div class="row">
					<a href="../tiket/" class="pull-right">Back To Home</a>
					<div class="col-md-12">
						<h1 class="coming-soon">Isi Data Peserta</h1>
					</div>
					<div method="post">
						<p>Masukkan kode yang terdapat pada tiket voucher</p>
						<form>
							<div class="form-group">
								<input type="text"  class="form-control" name="ticketVoucherNumber">
								<a href="ticket-voucher-buy-registration.php">
									<button type="button" class="btn btn-success" value="TicketActivated" name="activateTicket">Aktivasi</button>
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
