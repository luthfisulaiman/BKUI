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

			  @foreach ($usersArray as $user)
			  	<tr>
			      <th scope="row">1</th>
			      <td>{{ $user->nama }}</td>
			      <td>{{ $user->jumlah_bayar }}</td>
			      <td><div class="row">
			      <div class="col-md-6">
				      <button id="continue" class="btn btn-pay" style="font-size: 1em;" onclick="window.location.href='view-transaction.php'">View</button>
				  </div>
				  <div class="col-md-6">
				      <button id="continue" class="btn btn-pay" style="font-size: 1em;">Delete</button>
				  </div>
				  </div></td>
			    </tr>
			  @endforeach

			  @endif
			    {{-- <tr>
			      <th scope="row">2</th>
			      <td>Mary Sue</td>
			      <td>2</td>
			      <td>
			      <div class="row">
			      <div class="col-md-6">
				      <button id="continue" class="btn btn-pay" style="font-size: 1em;" onclick="window.location.href='view-transaction.php'">View</button>
				  </div>
				  <div class="col-md-6">
				      <button id="continue" class="btn btn-pay" style="font-size: 1em;">Delete</button>
				  </div>
				  </div>
			      </td>
			    </tr>
			    <tr>
			      <th scope="row">3</th>
			      <td>Gary Stu</td>
			      <td>3</td>
			     <td><div class="row">
			      <div class="col-md-6">
				      <button id="continue" class="btn btn-pay" style="font-size: 1em;" onclick="window.location.href='view-transaction.php'">View</button>
				  </div>
				  <div class="col-md-6">
				      <button id="continue" class="btn btn-pay" style="font-size: 1em;">Delete</button>
				  </div>
				  </div></td>
			    </tr>
			    <tr>
			      <th scope="row">4</th>
			      <td>Gary Stu</td>
			      <td>3</td>
			     <td><div class="row">
			      <div class="col-md-6">
				      <button id="continue" class="btn btn-pay" style="font-size: 1em;" onclick="window.location.href='view-transaction.php'">View</button>
				  </div>
				  <div class="col-md-6">
				      <button id="continue" class="btn btn-pay" style="font-size: 1em;">Delete</button>
				  </div>
				  </div></td>
			    </tr>
			    <tr>
			      <th scope="row">5</th>
			      <td>Gary Stu</td>
			      <td>3</td>
			      <td><div class="row">
			      <div class="col-md-6">
				      <button id="continue" class="btn btn-pay" style="font-size: 1em;" onclick="window.location.href='view-transaction.php'">View</button>
				  </div>
				  <div class="col-md-6">
				      <button id="continue" class="btn btn-pay" style="font-size: 1em;">Delete</button>
				  </div>
				  </div></td>
			     </tr> --}}
			  </tbody>
			</table>
		</div>
	</div>
	</div>
@stop