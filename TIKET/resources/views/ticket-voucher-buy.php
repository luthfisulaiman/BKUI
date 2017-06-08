<?php
	

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Pembelian Tiket Voucher</title>
		<link rel="stylesheet" type="text/css" href="/BK-Ganteng/frontend/tiket/vendor/css/font-awesome.min.css"/>
		<link rel="stylesheet" type="text/css" href="/BK-Ganteng/frontend/tiket/vendor/css/tooltipster.css"/>
		<link rel="stylesheet" type="text/css" href="/BK-Ganteng/frontend/tiket/vendor/css/tooltipster-shadow.css"/>
		<link rel="stylesheet" type="text/css" href="/BK-Ganteng/frontend/tiket/vendor/css/remodal.css"/>
		<link rel="stylesheet" type="text/css" href="/BK-Ganteng/frontend/tiket/vendor/css/remodal-default-theme.css"/>
		<link rel="stylesheet" type="text/css" href="/BK-Ganteng/frontend/tiket/app/css/ticket-style.css?v=1.3.5"/>
		<link rel="stylesheet" type="text/css" href="/BK-Ganteng/frontend/tiket/app/bootstrap/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="/BK-Ganteng/BKUI17_Coming-Soon/app/css/styles.css?v=1.3.5"/>
	</head>
	<body>
		<div class="container">
			<div class="header">
				<h1>Welcome to BKUI17 website!</h1>
			</div>
			<div method="post">
				<p>Masukkan kode yang terdapat pada tiket voucher</p>
				<form>
					<input type="text" name="ticketVoucherNumber">
					<a href="ticket-voucher-buy-registration.php">
						<button type="submit" class="btn btn-success" value="TicketActivated" name="activateTicket">Aktivasi</button>
					</a>
				</form>
			</div>
		</div>
	</body>
</html>