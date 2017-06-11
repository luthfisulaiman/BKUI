@extends('layouts.default')
@section('content')
<div class="container">
	<div id="buy-content">
		<div class="row">
			<div class="header col-md-12">
				<h1 class="head-form" style="text-align:"center"; ">Isi Data Peserta</h1>
			</div>
			<p>Isilah identitas diri pada form di bawah ini</p>
			<form method="post" action="../public/registrasi-voucher">
				{{ csrf_field() }}

				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
						    <label for="kodeTiket">Kode Tiket :</label>
						    <input type="text" class="form-control" id="kodeTiket" name="kodeTiket" value="{{ $kodeTiket->kode_tiket }}" readonly>
						</div>	
					</div>
					<div class="col-md-6">
						<div class="form-group">
						    <label for="namaPeserta">Nama Peserta :</label>
						    <input required type="text" class="form-control" id="namaPeserta" name="namaPeserta">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						    <label for="sekolah">Asal Sekolah :</label>
						    <input required type="text" class="form-control" id="sekolah" name="sekolah">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						    <label for="email">Email :</label>
						    <input required type="email" class="form-control" id="email" name="email">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						    <label for="no-identitas">Nomor Identitas :</label>
						    <input required type="text" class="form-control" id="no-identitas" name="no-identitas">
						</div>
					</div>
					<div>
						<div class="col-md-6"> 
					  	<div class="form-group">
					    <label for="jenisId">Jenis Identitas</label>
					    <select required id="jenisId" class="form-control selectpicker" name="jenisId">
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
					    <label for="jurusan">Jurusan SMA</label>
					    <select required id="jurusan" class="form-control selectpicker" name="jurusan">
					    	<option class="styled-option">IPA</option>
					    	<option class="styled-option">IPS</option>
					    	<option class="styled-option" value="others">Lain-lain</option>
					    </select>
				 		</div>
				 		</div>
				 	</div>
				 	<div>
				 		<div class="col-md-12"> 
					  	<div class="form-group">
					    <label for="rumpun">Rumpun UI</label>
					    <select required id="rumpun" class="form-control selectpicker" name="hariH">
					    	<option class="styled-option">IPA</option>
					    	<option class="styled-option">IPS</option>
					    </select>
						</div>
						</div>
					</div>
				</div>
				<input type="submit" class="btn btn-activate" value="Submit" name="registrasiTiket">
			</form>
		</div>
	</div>
</div>
@stop