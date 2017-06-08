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
		<link rel="stylesheet" type="text/css" href="/BK-Ganteng/frontend/tiket/app/css/styles.css?v=1.3.5"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div>
				<div class="header">
					<h1>Welcome to BKUI17 website!</h1>
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
					    <input type="number" class="form-control" id="phone-number">
					</div>
					<div class="form-group">
					    <label for="address">Alamat:</label>
					    <input type="text" class="form-control" id="address">
					</div>
					<div class="form-group">
					    <label for="school">Asal Sekolah:</label>
					    <input type="address" class="form-control" id="school">
					</div>
					<button type="button" value="ticketSubmitted" class="btn btn-success" data-toggle="modal" data-target="#myModal" name="submitTicket">Submit</button>
					<div class="modal fade" id="myModal" role="dialog">
					    <div class="modal-dialog">
						    <!-- Modal content-->
						    <div class="modal-content">
						        <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">Download Tiket</h4>
						        </div>
						        <div class="modal-body">
						        	<a href="">
						          		<button type="button" class="btn btn-default" value="ticketDownloaded">Download</button>
						          	</a>
						        </div>
						        <div class="modal-footer">
						          	<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
						        </div>
						    </div>
					    </div>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>