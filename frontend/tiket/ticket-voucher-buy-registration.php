<?php
	include 'head.php';
?>
	<body class="wrapper">
		<div class="container">
			<div id="buy-content">
				<div class="row">
					<a href="/BK-Ganteng/frontend/tiket/" class="pull-right">Back To Home</a>
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
	<img src ="app/images/wave.png" class = "img-responsive"  >
	<footer>
		<p class="text-center">Copyright &copy; 2017. Tim Sistem Informasi BKUI17</p>
	</footer>
	<?php include "foot.php";