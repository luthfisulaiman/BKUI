@extends('layouts.default')

@section('content')
	<div id="admin">
	<div class="row">
		<div class="col-md-12">
			<h2 class="dashboard-title">Verify Your Identity</h2>
		</div>
		<div class="col-md-12">	
			<form method="POST" action="../public/nimda">
			{{ csrf_field() }}
				<div class="col-md-12">
					<div class="form-group">
					    <label for="secretCode">Secret Code</label>
					    <input type="password" class="form-control" id="kode" name="kode">
					</div> 
					<div class="form-group">
					    <input required type="submit" class="btn btn-buy" value="Verify" id="pwd">
					</div>
				</div>
			</form>
		</div>
	</div>
	</div>
@stop