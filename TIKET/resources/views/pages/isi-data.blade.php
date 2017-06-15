@extends('layouts.default')
@section('content')
<div id="buy-content">
	
	<div class="row">
	<div class="col-md-12">
		<h1 class="coming-soon">Data Pembeli</h1>
	</div>
	<div class="col-md-12">
		<form method="post" action="../public/isi-data">
		{{ csrf_field() }}
		<div class="row">
		<div class="col-md-6">
			<div class="form-group">
			    <label for="kode_pembayaran">Kode Referensi:</label>
			    <input required type="text" class="form-control" id="kode_pembayaran" name="kode_pembayaran" value="{{ Session::get('arrayPemesan')['kode_pembayaran'] }}" readonly>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
			    <label for="deadlineDate">Deadline Pembayaran</label>
			    <input required type="text" class="form-control" id="deadlineDate" name="deadlineDate" value="{{ Session::get('arrayPemesan')['deadlineDate'] }}" readonly>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
			    <label for="nama">Nama Pemesan:</label>
			    <input required type="text" class="form-control" id="nama" name="nama_pemesan" value="{{ Session::get('arrayPemesan')['nama'] }}" readonly>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
			    <label for="email">Email</label>
			    <input required type="email" class="form-control" id="email" name="email_pemesan"  value="{{ Session::get('arrayPemesan')['email'] }}" readonly>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
			    <label for="no-identitas">Nomor Identitas:</label>
			    <input required type="text" class="form-control" id="no-identitas" name="no_identitas_pemesan"  value="{{ Session::get('arrayPemesan')['no_id'] }}" readonly>
			</div>
		</div>
			<div class="col-md-6"> 
		  	<div class="form-group">
		    	<label for="jenisIdentitas">Jenis Identitas</label>
		    	<input required type="text" class="form-control" id="jenisIdentitas" name="jenisIdentitas_pemesan"  value="{{ Session::get('arrayPemesan')['jenis_id'] }}" readonly>
			</div>
		</div>
	  	<div class="col-md-6"> 
		  	<div class="form-group">
			    <label for="nomer-hp">Nomor HP</label>
			    <input required type="text" class="form-control" id="nomer-hp" name="nomer_hp_pemesan" value="{{ Session::get('arrayPemesan')['no_hp'] }}" readonly>
		 	</div>
	 	</div>
	   	<div class="col-md-6"> 
		  	<div class="form-group">
		    	<label for="jumlahTiket">Jumlah Tiket</label>
		    	<input required type="text" class="form-control" id="jumlahTiket" name="jumlahTiket_pemesan" value="{{ Session::get('arrayPemesan')['jumlahTiket'] }}" readonly>
			</div>
		</div>
		</div>
		<br><br>
		@for ($i = 1; $i <= Session::get('arrayPemesan')['jumlahTiket']; $i++)
			<div id="peserta_{{ $i }}">
			<div class="row">	
				<h1 class="data-peserta"> Peserta {{ $i }} </h1>
				<div class="col-md-6">
					<div class="form-group">
					    <label for="namaPeserta_{{ $i }}">Nama Peserta :</label>
					    <input required type="text" class="form-control" id="namaPeserta_{{ $i }}" name="namaPeserta_{{ $i }}">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
					    <label for="sekolah_{{ $i }}">Asal Sekolah :</label>
					    <input required type="text" class="form-control" id="sekolah_{{ $i }}" name="sekolah_{{ $i }}">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
					    <label for="email_{{ $i }}">Email :</label>
					    <input required type="email" class="form-control" id="email_{{ $i }}" name="email_{{ $i }}">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
					    <label for="no-identitas_{{ $i }}">Nomor Identitas :</label>
					    <input required type="text" class="form-control" id="no-identitas_{{ $i }}" name="no-identitas_{{ $i }}">
					</div>
				</div>
				<div>
					<div class="col-md-6"> 
				  	<div class="form-group">
				    <label for="jenisId_{{ $i }}">Jenis Identitas</label>
				    <select required id="jenisId_{{ $i }}" class="form-control selectpicker" name="jenisId_{{ $i }}">
				    	<option class="styled-option">KTP</option>
				    	<option class="styled-option">Kartu Pelajar</option>
				    	<option class="styled-option">SIM</option>
				    	<option class="styled-option">Lainnya</option>
				    </select>
					</div>
					</div>
				</div>
				<div>
			  		<div class="col-md-6"> 
				  	<div class="form-group">
				    <label for="jurusanSMA_{{ $i }}">Jurusan SMA</label>
				    <select required id="jurusanSMA_{{ $i }}" class="form-control selectpicker" name="jurusanSMA_{{ $i }}">
				    	<option class="styled-option" value="ipa_{{ $i }}">IPA</option>
				    	<option class="styled-option" value="ips_{{ $i }}">IPS</option>
				    	<option class="styled-option" value="others_{{ $i }}">Lain-lain</option>
				    </select>
			 		</div>
			 		</div>
			 	</div>
			 	<div>
			 		<div class="col-md-12"> 
				  	<div class="form-group">
				    <label for="rumpunUI_{{ $i }}">Jenis Tiket</label>
				    <select required id="rumpunUI_{{ $i }}" class="form-control selectpicker" name="rumpunUI_{{ $i }}">
				    	<option class="styled-option" value="ipa_{{ $i }}">IPA</option>
				    	<option class="styled-option" value="ips_{{ $i }}">IPS</option>
				    </select>
					</div>
					</div>
				</div>
			</div>
			</div>
			<br>
		@endfor
			@if (isset($pesanErrorPeserta))
				<p>{{ '*'.$pesanErrorPeserta }}</p>
			@endif
			<h4>*harap pastikan kembali info yang anda isi telah sesuai</h4>
			<input type="submit" class="btn btn-activate" value="Submit" name="submitDataPeserta">
		</form>
	</div>
	</div>
</div>
@stop