<?php $__env->startSection('content'); ?>
	<body class="wrapper">
		<div class="header" id="buy-content">
				<div class="row">
					<a href="../public" class="pull-right">Back To Home</a>
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
								<a href="../public/registrasi-voucher">
									<button type="button" class="btn btn-activate" value="TicketActivated" name="activateTicket">Aktivasi</button>
								</a>
							</div>
						</form>
					</div>
				</div>
		</div>
	</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>