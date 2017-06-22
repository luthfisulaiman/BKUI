@extends('layouts.default')
@section('content')
<div id="buy-content">
	@if (Session::get('arrayPemesan') == null)
		<p>cihu</p>
	@else
	<div class="row">
	<div class="col-md-12">
		<h1 class="coming-soon">Data Pembeli</h1>
	</div>
	<div class="col-md-12">
		<form method="post" action="update-data">
		{{ csrf_field() }}
		<div class="row">
		<div class="col-md-12">
			<div class="form-group">
			    <label for="kode_pembayaran">Kode Referensi:</label>
			    <input required type="text" class="form-control" id="kode_pembayaran" name="kode_pembayaran" value="{{ Session::get('arrayPemesan')['pemesan']->kode_bayar }}" readonly>
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
			    <label for="deadlineDate">Deadline Pembayaran</label>
			    <input required type="text" class="form-control" id="deadlineDate" name="deadlineDate" value="{{ Session::get('arrayPemesan')['pemesan']->waktu_bayar }}" readonly>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
			    <label for="nama">Nama Pemesan:</label>
			    <input required type="text" class="form-control" id="nama" name="nama_pemesan" value="{{ Session::get('arrayPemesan')['pemesan']->nama }}" readonly>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
			    <label for="email">Email</label>
			    <input required type="email" class="form-control" id="email" name="email_pemesan"  value="{{ Session::get('arrayPemesan')['pemesan']->email }}" readonly>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
			    <label for="no-identitas">Nomor Identitas:</label>
			    <input required type="text" class="form-control" id="no-identitas" name="no_identitas_pemesan"  value="{{ Session::get('arrayPemesan')['pemesan']->nomorId }}" readonly>
			</div>
		</div>
			<div class="col-md-6"> 
		  	<div class="form-group">
		    	<label for="jenisIdentitas">Jenis Identitas</label>
		    	<input required type="text" class="form-control" id="jenisIdentitas" name="jenisIdentitas_pemesan"  value="{{ Session::get('arrayPemesan')['pemesan']->jenis_identitas }}" readonly>
			</div>
		</div>
	  	<div class="col-md-6"> 
		  	<div class="form-group">
			    <label for="nomer-hp">Nomor HP</label>
			    <input required type="text" class="form-control" id="nomer-hp" name="nomer_hp_pemesan" value="{{ Session::get('arrayPemesan')['pemesan']->noHP }}" readonly>
		 	</div>
	 	</div>
	   	<div class="col-md-6"> 
		  	<div class="form-group">
		    	<label for="jumlahTiket">Jumlah Tiket</label>
		    	<input required type="text" class="form-control" id="jumlahTiket" name="jumlahTiket_pemesan" value="{{ Session::get('arrayPemesan')['pemesan']->jumlah_bayar }}" readonly>
			</div>
		</div>
		</div>
		<br><br>
		@for ($i = 0; $i <= (Session::get('arrayPemesan')['pemesan']->jumlah_bayar - Session::get('arrayPemesan')['jumlah_terdaftar']); $i++)
			<div id="peserta_{{ $i + 1 }}">
			<div class="row">	
				<h1 class="data-peserta"> Peserta {{ $i + 1 }} </h1>
				<div class="col-md-6">
					<div class="form-group">
					    <label for="namaPeserta_{{ $i + 1 }}">Nama Peserta :</label>
					    <input required type="text" class="form-control" id="namaPeserta_{{ $i + 1 }}" name="namaPeserta_{{ $i + 1 }}" value="{{ Session::get('arrayPemesan')['peserta'][$i]->nama }}" readonly>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
					    <label for="sekolah_{{ $i + 1 }}">Asal Sekolah :</label>
					    <input required type="text" class="form-control" id="sekolah_{{ $i + 1 }}" name="sekolah_{{ $i + 1 }}" value="{{ Session::get('arrayPemesan')['peserta'][$i]->asalSMA }}" readonly>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
					    <label for="email_{{ $i + 1 }}">Email :</label>
					    <input required type="email" class="form-control" id="email_{{ $i + 1 }}" name="email_{{ $i + 1 }}" value="{{ Session::get('arrayPemesan')['peserta'][$i]->email }}" readonly>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
					    <label for="no-identitas_{{ $i + 1 }}">Nomor Identitas :</label>
					    <input required type="text" class="form-control" id="no-identitas_{{ $i + 1 }}" name="no-identitas_{{ $i + 1 }}" value="{{ Session::get('arrayPemesan')['peserta'][$i]->no_identitas }}" readonly>
					</div>
				</div>
				<div>
					<div class="col-md-6"> 
				  	<div class="form-group">
				    <label for="jenisId_{{ $i + 1 }}">Jenis Identitas</label>
				    <input required type="text" class="form-control" id="jenisId_{{ $i + 1 }}" name="no-jenisId_{{ $i + 1 }}" value="{{ Session::get('arrayPemesan')['peserta'][$i]->jenis_identitas }}" readonly>
					</div>
					</div>
				</div>
				<div>
			  		<div class="col-md-6"> 
				  	<div class="form-group">
				    <label for="jurusanSMA_{{ $i + 1 }}">Jurusan SMA</label>
				    <input required type="text" class="form-control" id="jurusanSMA_{{ $i + 1 }}" name="jurusanSMA_{{ $i + 1 }}" value="{{ strtoupper(Session::get('arrayPemesan')['peserta'][$i]->jurusan) }}" readonly>
			 		</div>
			 		</div>
			 	</div>
			 	@if (Session::get('arrayPemesan')['peserta'][$i]->isHariPertama == 1)
			 		<div>
				 		<div class="col-md-12"> 
					  	<div class="form-group">
					    <label for="rumpunUI_{{ $i + 1 }}">Jenis Tiket</label>
					    <input required type="text" class="form-control" id="rumpunUI_{{ $i + 1 }}" name="rumpunUI_{{ $i + 1 }}" value="IPS" readonly>
						</div>
						</div>
					</div>
			 	@else
			 		<div>
				 		<div class="col-md-12"> 
					  	<div class="form-group">
					    <label for="rumpunUI_{{ $i + 1 }}">Jenis Tiket</label>
					    <input required type="text" class="form-control" id="rumpunUI_{{ $i + 1 }}" name="rumpunUI_{{ $i + 1 }}" value="IPA" readonly>
						</div>
						</div>
					</div>
			 	@endif
			</div>
			</div>
			<br>
		@endfor

		@for ($i = Session::get('arrayPemesan')['jumlah_terdaftar']; $i < Session::get('arrayPemesan')['pemesan']->jumlah_bayar; $i++)
			<div id="peserta_{{ $i + 1 }}">
			<div class="row">	
				<h1 class="data-peserta"> Peserta {{ $i + 1 }} </h1>
				<div class="col-md-6">
					<div class="form-group">
					    <label for="namaPeserta_{{ $i + 1 }}">Nama Peserta :</label>
					    <input required type="text" class="form-control" id="namaPeserta_{{ $i + 1 }}" name="namaPeserta_{{ $i + 1 }}">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
					    <label for="sekolah_{{ $i + 1 }}">Asal Sekolah :</label>
					    <input required type="text" class="form-control" id="sekolah_{{ $i + 1 }}" name="sekolah_{{ $i + 1 }}">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
					    <label for="email_{{ $i + 1 }}">Email :</label>
					    <input required type="email" class="form-control" id="email_{{ $i + 1 }}" name="email_{{ $i + 1 }}">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
					    <label for="no-identitas_{{ $i + 1 }}">Nomor Identitas :</label>
					    <input required type="text" class="form-control" id="no-identitas_{{ $i + 1 }}" name="no-identitas_{{ $i + 1 }}">
					</div>
				</div>
				<div>
					<div class="col-md-6"> 
				  	<div class="form-group">
				    <label for="jenisId_{{ $i + 1 }}">Jenis Identitas</label>
				    <select required id="jenisId_{{ $i + 1 }}" class="form-control selectpicker" name="jenisId_{{ $i + 1 }}">
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
				    <label for="jurusanSMA_{{ $i + 1 }}">Jurusan SMA</label>
				    <select required id="jurusanSMA_{{ $i + 1 }}" class="form-control selectpicker" name="jurusanSMA_{{ $i + 1 }}">
				    	<option class="styled-option" value="ipa_{{ $i + 1 }}">IPA</option>
				    	<option class="styled-option" value="ips_{{ $i + 1 }}">IPS</option>
				    	<option class="styled-option" value="others_{{ $i + 1 }}">Lain-lain</option>
				    </select>
			 		</div>
			 		</div>
			 	</div>
			 	<div>
			 		<div class="col-md-12"> 
				  	<div class="form-group">
				    <label for="rumpunUI_{{ $i + 1 }}">Jenis Tiket</label>
				    <select required id="rumpunUI_{{ $i + 1 }}" class="form-control selectpicker" name="rumpunUI_{{ $i + 1 }}">
				    	<option class="styled-option" value="ipa_{{ $i + 1 }}">IPA</option>
				    	<option class="styled-option" value="ips_{{ $i + 1 }}">IPS</option>
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
			

			<div class="modal fade" id="confirm" role="dialog">
		    <div class="modal-dialog">
		    	<div class="modal-content">
		    		<div class="modal-body">
		    			<h4 class="modal-title">Apakah data yang anda masukkan sudah benar?</h4>
		    			<p>Silahkan mengecek kembali kebenaran data anda</p>
		    		</div>
		    		<div class="modal-footer">
			          <input type="submit" class="btn btn-activate" value="Ya" name="submitDataPeserta">
			          <button id="continue" class="btn btn-pay" data-dismiss="modal">Tidak</button>
			        </div>
			      </div>
			  </div>
		  </div>
		</form>
		<button id="continue" class="btn btn-pay" data-toggle="modal" data-target="#confirm">Submit</button>
	</div>
	</div>
</div>
	@endif
@stop