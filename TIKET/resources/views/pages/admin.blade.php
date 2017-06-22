@extends('layouts.default')

@section('content')
	<div id="admin">
	<div class="row">
		<div class="col-md-12">
			<h2 class="dashboard-title">Dashboard Admin</h2>
		</div>
		<div class="col-md-12">	
			<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari Pembeli">
			<table class="table table-responsive" id="myTable">
			  <thead>
			    <tr>
			      <th>No</th>
			      <th>Nama Pemesan</th>
			      <th>Jumlah Pesanan</th>
			      <th>Status Pembayaran</th>
			      <th>Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  @if (Session::get('usersArray') != null)
				  <?php $i = 1;?>
				  @foreach (Session::get('usersArray') as $user)
				  	<tr>
				      <th scope="row"><?php echo $i; ?></th>
				      <td name="nama" value ={{ $user->nama }}>{{ $user->nama }}</td>
				      <td>{{ $user->jumlah_bayar }}</td>
				      <td><div class="row">
				      	@if ($user->isPaid == 0)
				      		<p style="font-size: 1em; color: red;"> BELUM LUNAS </p>
				      	@else
				      		<p style="font-size: 1em; color: blue;"> SUDAH LUNAS </p>
				      	@endif
					  </div></td>
				      <td><div class="row">
				      <form method="POST" action="view-transaction">
						{{ csrf_field() }}
							<div class="col-md-6">
								<div class="form-group">
								    <button id="continue" class="btn btn-pay" style="font-size: 1em;" name="view" value={{ $user->kode_pembayaran }}>View</button>
								</div>
							</div>
						</form>
						<form method="POST" action="delete-transaction">
						{{ csrf_field() }}
							<div class="col-md-6">
								<div class="form-group">
									<button id="continue" class="btn btn-pay" style="font-size: 1em;" name="delete" value={{ $user->kode_pembayaran }}>Delete</button>
								</div>
							</div>
						</form>
					  </div></td>
				    </tr>
				    <?php $i++; ?>
				  @endforeach

			  @endif
			  </tbody>
			</table>
		</div>
	</div>
	</div>
@stop