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
			      <th>Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  @if (isset($usersArray))
				  <?php $i = 1;?>
				  @foreach ($usersArray as $user)
				  	<tr>
				      <th scope="row"><?php echo $i; ?></th>
				      <td>{{ $user->nama }}</td>
				      <td>{{ $user->jumlah_bayar }}</td>
				      <td><div class="row">
				      <div class="col-md-6">
					      <button id="continue" class="btn btn-pay" style="font-size: 1em;" onclick="window.location.href='../public/view-transaction'">View</button>
					  </div>
					  <div class="col-md-6">
					      <button id="continue" class="btn btn-pay" style="font-size: 1em;">Delete</button>
					  </div>
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