@extends('layouts.default')
@section('content')
<div id="download">
<div class="row">
	<div class="col-md-6">
	<h1 class="coming-soon">Download Tiket</h1>
	</div>
</div>

	<h1 class="download-head">{{ $dataDownloadTiket->nama }}</h1>
	<div class="thumbnail">
	<div class="modal-body">
		<button id="continue" class="btn btn-buy">Download Tiket</button>
	</div>
	</div>
</div>
@stop