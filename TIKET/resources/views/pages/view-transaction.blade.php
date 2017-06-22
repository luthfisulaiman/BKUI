@extends('layouts.default')

@section('content')
<div id="admin">
	<div class="row">
			<a href="nimda" class="pull-right">Back To Dashboard</a>
			<br><br>
			<h2 class="coming-soon">Detail Transaksi</h2>
			@if (isset($usersArray))
				<?php $i = 1;?>
				<div style="float: right;">
					<h3> Kode Pembayaran: {{$usersArray['kode_pembayaran']}}</h3>
				</div>

				<div class="col-sm-6" style="margin-top: 50px;">
					<div class="col-sm-9">
						<h2 class="detailOrder">Nama Pemesan</h2>
						<p class="contentOrder">
							@foreach ($usersArray['pemesan'] as $pemesan)
								{{$pemesan->nama}}
							@endforeach
						</p>
						<h2 class="detailOrder">Email Pemesan</h2>
						<p class="contentOrder">
							@foreach ($usersArray['pemesan'] as $pemesan)
								{{$pemesan->email}}
							@endforeach
						</p>
				@foreach ($usersArray['dipesan'] as $user)
					<div class="row">
							<div class="col-sm-12">
							<h2 class="detailOrder">Peserta <?php echo $i;?></h2>
								<div class="row">
									<div class="col-sm-6">
										<p class="contentOrder">Nama:</p>
									</div>
									<div class="col-sm-6">
										<p class="contentOrder">{{ $user->nama }}</p>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<p class="contentOrder">Email:</p>
									</div>
									<div class="col-sm-6">
										<p class="contentOrder">{{ $user->email }}</p>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<p class="contentOrder">Kode Tiket:</p>
									</div>
									<div class="col-sm-6">
										@if($user->kode_tiket == null)
											<p class="contentOrder" style="color: red;">Belum Memiliki Tiket!</p>
										@else
											<?php $isAda = true; ?>
											<p class="contentOrder">{{ $user->kode_tiket }}</p>
										@endif					
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<p class="contentOrder">Hari:</p>
									</div>
									<div class="col-sm-6">
										@if($user->isHariPertama == 1)
											<p class="contentOrder">Sabtu</p>
										@else
											<p class="contentOrder">Minggu</p>
										@endif
									</div>
								</div>
							</div>
						</div>
					<?php $i++; ?>
				@endforeach
					</div>	
				</div>

				@foreach ($usersArray['bayaran'] as $bayaran)
					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-12">
								<h2 class="detailOrder">Total</h2>
								<p class="contentOrder">Rp. {{$bayaran->jumlah_bayar * 20000}},-</p>
							</div>
							<div class="col-sm-12">
								<h2 class="detailOrder">Status Pembayaran</h2>
								@if($bayaran->isPaid == 0)
									<p class="contentOrder" style="color: red;">Belum Lunas</p>
								@else
									<p class="contentOrder" style="color: blue;">Sudah Melakukan Pembayaran</p>
									<div class="col-sm-12">
										<div class="row">
											<div class="col-sm-6 contentOrder">
												Nama Pemilik Rekening:
											</div>
											<div class="col-sm-6 contentOrder">
												{{ $bayaran->rekening_pemilik }}
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 contentOrder">
												Nama Bank:
											</div>
											<div class="col-sm-6 contentOrder">
												{{ $bayaran->nama_bank }}
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 contentOrder">
												Tanggal Transfer:
											</div>
											<div class="col-sm-6 contentOrder">
												{{ $bayaran->tanggal_transfer }}
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 contentOrder">
												Jumlah Pembayaran:
											</div>
											<div class="col-sm-6 contentOrder">
												Rp. {{$bayaran->jumlah_bayar * 20000}},-
											</div>
										</div>
										@if (!$isAda)
											<form method="POST" action="activate">
											{{ csrf_field() }}
												<input type="hidden" name="activate" value="{{$usersArray['kode_pembayaran']}}" />
												<input required type="submit" id="continue" class="btn btn-pay" data-target="#confirmPayment" style="margin-top: 10px;" value="Aktifkan Tiket">
											</form>
										@endif
									</div>
								@endif
							</div>
						</div>
					</div>
				@endforeach
			@endif
	</div>
</div>


	<div class="modal fade" id="confirmPayment" role="dialog">
	    <div class="modal-dialog">
	    	<div class="modal-content">
	    		<div class="modal-body">
	    			<h4 class="modal-title">Aktifkan Tiket Peserta?</h4>
	    		</div>
	    		<div class="modal-footer">
		          <button id="continue" class="btn btn-pay">Ya</button>
		          <button id="continue" class="btn btn-pay" data-dismiss="modal">Tidak</button>
		        </div>
		      </div>
		  </div>
	  </div>
@stop
