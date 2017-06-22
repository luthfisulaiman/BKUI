<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Http\Controllers\stdClass;

class baseController extends Controller
{
    public function validateAdmin() {
        return view('pages.adminDummy');
    }

    public function adminView(Request $request) {
        $request -> session() -> reflash();
        $kode_pembayaran = $request->view;
        $usersQuery = DB::table('peserta')
                        ->where('kode_pembayaran', '=', $kode_pembayaran)
                        ->get();

        $userName = DB::table('pembayar')
                      ->select('nama', 'email')
                      ->where('kode_pembayaran', '=', $kode_pembayaran)
                      ->get();

        $userPayment = DB::table('pembayaran')
                        ->where('kode_pembayaran', '=', $kode_pembayaran)
                        ->get();
                        
        $usersArray = ["pemesan" => $userName, "kode_pembayaran" => $kode_pembayaran, "dipesan" => $usersQuery, "bayaran" => $userPayment];

        $request -> session() -> flash('usersArray', $usersArray);
        return view('pages.view-transaction', compact('usersArray'));
    }

    public function activateTicket(Request $request) {
        $kode_pembayaran = $request->activate;
        $jenis_tiket = 'Pre-Sale';

        $tiket_amount = DB::table('pembayaran')
                          ->select('jumlah_bayar')
                          ->where('kode_pembayaran', '=', $kode_pembayaran)
                          ->first();

        for ($i = 1; $i <= $tiket_amount->jumlah_bayar; $i++) {
            $tiket_query = DB::table('tiket')
                        ->select('kode_tiket')
                        ->where('jenis_tiket', '=', $jenis_tiket)
                        ->where('isTaken', '=', 0)
                        ->first();

            $query_peserta = DB::table('peserta')
                        ->select('isHariPertama', 'email')
                        ->where('kode_pembayaran', '=', $kode_pembayaran)
                        ->where('kode_tiket', '=', NULL)
                        ->first();

            DB::table('tiket')
                ->where('kode_tiket', '=', $tiket_query->kode_tiket)
                ->update(['isTaken' => 1]);

            DB::table('peserta')
                ->where('kode_pembayaran', '=', $kode_pembayaran)
                ->where('email', '=', $query_peserta->email)
                ->update(['kode_tiket' => $tiket_query->kode_tiket]);

            if ($query_peserta->isHariPertama == 1) {
                DB::table('detail_tiket')
                   ->where('kode_tiket', '=', $tiket_query->kode_tiket)
                   ->update(array('isHariPertama' => 1, 'kode_pembayaran' => $kode_pembayaran));
            } else {
                DB::table('detail_tiket')
                   ->where('kode_tiket', '=', $tiket_query->kode_tiket)
                   ->update(['kode_pembayaran' => $kode_pembayaran]);
            }
        }

        return view('pages.success-activate');
    }

    public function admin(Request $request){
        $request -> session() -> reflash();
        if (isset($request) && $request->kode == 'borah_bkui17') {
            $usersArray = DB::table('pembayar')
                        ->join('pembayaran', 'pembayar.kode_pembayaran', '=', 'pembayaran.kode_pembayaran')
                        ->select('nama', 'jumlah_bayar', 'pembayar.kode_pembayaran')
                        ->get();

            $request -> session() -> flash('usersArray', $usersArray);
            return view('pages.admin', compact('usersArray'));
        } else {
            return view('pages.menu');
        }
    }
    public function view_transaction(){
        return view('pages.view-transaction');
    }
    public function index(){
        return view('pages.menu-presale');
    }
    
    public function aktivasi_voucher(){
        return view('pages.aktivasi-voucher');
    }
    
    public function beli(){
        $totalPeserta = DB::table('peserta')->count();
        $waktuSekarang = Carbon::now('Asia/Jakarta');
        
        if ($waktuSekarang > '2017-06-18 09:00:00') {
            if ($totalPeserta < 1000) {
                return view('pages.beli');
            }
            else {
                return view('pages.sold-out');
            }
        }
        elseif ($waktuSekarang > '2017-06-17 09:00:00') {
            if ($totalPeserta < 718) {
                return view('pages.beli');
            }
            else {
                return view('pages.sold-out');
            }
        }
        elseif ($waktuSekarang > '2017-06-16 09:00:00') {
            if ($totalPeserta < 300) {
                return view('pages.beli');
            }
            else {
                return view('pages.sold-out');
            }
        }
        else {
            return view('pages.menu');
        }
    }

    public function beliSubmit(Request $request) {
        $this->validate($request, [
            'nama-pemesan' => 'required',
            'email' => 'bail|required|email|unique:pembayar,email', 
            'no-identitas' => 'bail|required|numeric',
            'nomer-hp' => 'bail|required|noHP',],
            [ 'nama-pemesan.required' => '*isi nama pemesan',
            'email.required'  => '*isi dengan email yang valid',
            'email.email'  => '*isi dengan format email yang sesuai',
            'no-identitas.required'  => '*isi dengan nomor identitas Anda',
            'no-identitas.numeric' => '*isi dengan nomor identitas Anda',
            'nomer-hp.required' => '*isi dengan nomor Hp Anda',
            'email.unique' => '*Anda tidak dapat membeli tiket dengan email yang sama',
            ]);

        $nama_pemesan = $request->input('nama-pemesan');
        $randnum = rand(1111111111,999999999);
        $deadlineDate = Carbon::now('Asia/Jakarta')->addHours(24)->toDateTimeString();
        $kodePembayaran = '';

        while(true) {
            $kodePembayaran = $randnum;
            $cekKodePembayaran = DB::table('pembayaran')
                                    -> select('kode_pembayaran')
                                    -> where('kode_pembayaran', '=', $kodePembayaran) -> first();

            if (is_null($cekKodePembayaran)) {
                break;
            }
        }

        $email_pemesan = $request->input('email');
        $no_identitas_pemesan = $request->input('no-identitas');
        $jenis_identitas_pemesan = $request->input('jenisIdentitas');
        $no_hp_pemesan = $request->input('nomer-hp');
        $jumlah_tiket_pemesan = $request->input('jumlahTiket');

        $arrayPemesan = array('nama' => $nama_pemesan, 'email' => $email_pemesan, 'no_id' => $no_identitas_pemesan, 'jenis_id' => $jenis_identitas_pemesan, 'no_hp' => $no_hp_pemesan, 'jumlahTiket' => $jumlah_tiket_pemesan, 'kode_pembayaran' => $kodePembayaran, 'deadlineDate' => $deadlineDate, 'isUpdate' => 0);
        
        $totalPeserta = DB::table('peserta')->count();
        $waktuSekarang = Carbon::now('Asia/Jakarta');
        if ($waktuSekarang > '2017-06-18 09:00:00') {
            if ($totalPeserta < 1000) {
                $request -> session() -> flash('arrayPemesan', $arrayPemesan);
                return view('pages.isi-data', compact('arrayPemesan'));
            }
            else {
                return view('pages.sold-out');
            }
        }
        elseif ($waktuSekarang > '2017-06-17 09:00:00') {
            if ($totalPeserta < 718) {
                $request -> session() -> flash('arrayPemesan', $arrayPemesan);
                return view('pages.isi-data', compact('arrayPemesan'));
            }
            else {
                return view('pages.sold-out');
            }
        }
        elseif ($waktuSekarang > '2017-06-16 09:00:00') {
            if ($totalPeserta < 300) {
                $request -> session() -> flash('arrayPemesan', $arrayPemesan);
                return view('pages.isi-data', compact('arrayPemesan'));
            }
            else {
                return view('pages.sold-out');
            }
        }
        else {
            return view('pages.sold-out');
        }

        
    }
    
    public function isi_data_step1(Request $request) {
        $request -> session() -> reflash();
        
        $totalPeserta = DB::table('peserta')->count();
        $waktuSekarang = Carbon::now('Asia/Jakarta');
        if ($waktuSekarang > '2017-06-18 09:00:00') {
            if ($totalPeserta < 1000) {
                return $this->isi_data_step2($request);
            }
            else {
                return view('pages.sold-out');
            }
        }
        elseif ($waktuSekarang > '2017-06-17 09:00:00') {
            if ($totalPeserta < 718) {
                return $this->isi_data_step2($request);
            }
            else {
                return view('pages.sold-out');
            }
        }
        elseif ($waktuSekarang > '2017-06-16 09:00:00') {
            if ($totalPeserta < 300) {
                return $this->isi_data_step2($request);
            }
            else {
                return view('pages.sold-out');
            }
        }
        else {
            return view('pages.sold-out');
        }
    }

    public static function getDataArray(Request $request) {
        $request -> session() -> reflash();
        $jumlah_tiket = $request->session()->get('arrayPemesan')['jumlahTiket'];


        // return $request->input('namaPeserta_1');
        $dataPeserta[0] = array('test'=>'test');

        for ($i = 1; $i <= $jumlah_tiket; $i++) {
            $namaPeserta = $request->input('namaPeserta_'.$i);
            $email = $request->input('email_'.$i);
            $jurusanSMA = $request->input('jurusanSMA_'.$i);
            $jurusanSMA = explode('_', $jurusanSMA)[0];

            $rumpunUI = $request->input('rumpunUI_'.$i);
            $asalSMA = $request->input('sekolah_'.$i);
            $no_identitas = $request->input('no-identitas_'.$i);
            $jenis_identitas = $request->input('jenisId_'.$i);

            if (explode('_',$rumpunUI)[0] == 'ipa') {
                $rumpunUI = 0;
            }
            else {
                $rumpunUI = 1;
            }
            
            if ($i == 1) {
                $dataPeserta[1] = array('nama'=>$namaPeserta, 'email'=>$email, 'jurusanSMA'=>$jurusanSMA, 'rumpunUI'=>$rumpunUI, 'asalSMA'=>$asalSMA, 'no_id'=>$no_identitas, 'jenis_id'=>$jenis_identitas); 
            }
            elseif ($i == 2) {
                $dataPeserta[2] = array('nama'=>$namaPeserta, 'email'=>$email, 'jurusanSMA'=>$jurusanSMA, 'rumpunUI'=>$rumpunUI, 'asalSMA'=>$asalSMA, 'no_id'=>$no_identitas, 'jenis_id'=>$jenis_identitas);
            }
            elseif ($i == 3) {
                $dataPeserta[3] = array('nama'=>$namaPeserta, 'email'=>$email, 'jurusanSMA'=>$jurusanSMA, 'rumpunUI'=>$rumpunUI, 'asalSMA'=>$asalSMA, 'no_id'=>$no_identitas, 'jenis_id'=>$jenis_identitas);
            }
            elseif ($i == 4) {
                $dataPeserta[4] = array('nama'=>$namaPeserta, 'email'=>$email, 'jurusanSMA'=>$jurusanSMA, 'rumpunUI'=>$rumpunUI, 'asalSMA'=>$asalSMA, 'no_id'=>$no_identitas, 'jenis_id'=>$jenis_identitas);
            }
            else {
                $dataPeserta[5] = array('nama'=>$namaPeserta, 'email'=>$email, 'jurusanSMA'=>$jurusanSMA, 'rumpunUI'=>$rumpunUI, 'asalSMA'=>$asalSMA, 'no_id'=>$no_identitas, 'jenis_id'=>$jenis_identitas);
            }
        }

        for ($i = 1; $i <= $jumlah_tiket; $i++) {
            $cekPeserta = DB::table('peserta') -> select('email', 'isHariPertama')
                                               -> where('email', '=', $dataPeserta[$i]['email']) -> get();
                                               
            if (count($cekPeserta) == 1) {
                foreach ($cekPeserta as $data) {
                    $cekHari = $data->isHariPertama;
                }

                if ($dataPeserta[$i]['rumpunUI'] == $cekHari) {
                    $request->session()->flash('arrayPemesan', $request->session()->get('arrayPemesan'));
                    $pesanErrorPeserta = 'Satu peserta tidak boleh memiliki jenis tiket yang sama';
                    if ($request->session()->get('arrayPemesan')['isUpdate'] == 1) {
                        // return $request->session()->get('arrayPemesan');
                        return view('pages.update-data', compact('pesanErrorPeserta'));
                    } else {
                        return view('pages.isi-data', compact('pesanErrorPeserta'));
                    }
                }
            } elseif (count($cekPeserta) > 1) {
                $request->session()->flash('arrayPemesan', $request->session()->get('arrayPemesan'));
                $pesanErrorPeserta = 'Satu peserta hanya boleh memiliki maksimal 1 IPA dan 1 IPS';
                if ($request->session()->get('arrayPemesan')['isUpdate'] == 1) {
                    return view('pages.update-data', compact('pesanErrorPeserta'));
                } else {
                    return view('pages.isi-data', compact('pesanErrorPeserta'));
                }
            }
        }
        
        for ($i = 1; $i < $jumlah_tiket; $i++) {
            for ($j = $i + 1; $j <= $jumlah_tiket; $j++) {
                if ($dataPeserta[$i]['email'] == $dataPeserta[$j]['email'] and $dataPeserta[$i]['rumpunUI'] == $dataPeserta[$j]['rumpunUI']) {
                    $request->session()->flash('arrayPemesan', $request->session()->get('arrayPemesan'));
                    return $request->session()->get('arrayPemesan');
                    $pesanErrorPeserta = 'Satu peserta tidak boleh memiliki jenis tiket yang sama';
                    if ($request->session()->get('arrayPemesan')['isUpdate'] == 1) {
                        return view('pages.update-data', compact('pesanErrorPeserta'));
                    } else {
                        return view('pages.isi-data', compact('pesanErrorPeserta'));
                    }
                }
            }
        }

        return $dataPeserta;
    }

    public function update_data(Request $request) {
        $request -> session() -> reflash();
        $request->session()->flash('arrayPemesan', $request->session()->get('arrayPemesan'));
        $dataPeserta = $this->getDataArray($request);

        // return $dataPeserta[3];

        $request->session()->flash('dataPeserta', $dataPeserta);
        return $this->update_data_insert($request);
    }

    public function update_data_insert(Request $request) {
        $request -> session() -> reflash();
        $email_pemesan = $request->session()->get('arrayPemesan')['pemesan']->email;
        $jumlah_tiket = $request->session()->get('arrayPemesan')['jumlahTiket'];
        $jumlah_terdaftar = $request->session()->get('arrayPemesan')['jumlah_terdaftar'];
        $jumlah_belum_terdaftar = $jumlah_tiket - $jumlah_terdaftar;
        $kode_pembayaran = $request->session()->get('arrayPemesan')['pemesan']->kode_bayar;

        for ($i = $jumlah_terdaftar + 1; $i <= $jumlah_tiket; $i++) {
            $namaPeserta = $request->session()->get('dataPeserta')[$i]['nama'];
            $email = $request->session()->get('dataPeserta')[$i]['email'];
            $jurusanSMA = $request->session()->get('dataPeserta')[$i]['jurusanSMA'];

            $rumpunUI = $request->session()->get('dataPeserta')[$i]['rumpunUI'];
            $asalSMA = $request->session()->get('dataPeserta')[$i]['asalSMA'];
            $no_identitas = $request->session()->get('dataPeserta')[$i]['no_id'];
            $jenis_identitas = $request->session()->get('dataPeserta')[$i]['jenis_id'];

            $cekPeserta = DB::table('peserta') -> select('email', 'isHariPertama')
                                               -> where('email', '=', $email) -> get();

            if ($cekPeserta -> isEmpty()) {
                DB::table('peserta') -> insertGetId(
                    ['nama' => $namaPeserta, 'jurusan' => $jurusanSMA, 'email' => $email, 'asalSMA' => $asalSMA, 'no_identitas' => $no_identitas, 'jenis_identitas' => $jenis_identitas, 'isHariPertama' => $rumpunUI, 'kode_pembayaran' => $kode_pembayaran]
                );    
            } else {
                if (count($cekPeserta) == 1) {
                    foreach ($cekPeserta as $data) {
                        $cekHari = $data->isHariPertama;
                    }

                    if ($rumpunUI == $cekHari) {
                        $request->session()->flash('arrayPemesan', $request->session()->get('arrayPemesan'));
                        $pesanErrorPeserta = 'Satu peserta tidak boleh memiliki jenis tiket yang sama';
                        return view('pages.update-data', compact('pesanErrorPeserta'));
                    }
                    else {
                        DB::table('peserta') -> insertGetId(
                            ['nama' => $namaPeserta, 'jurusan' => $jurusanSMA, 'email' => $email, 'asalSMA' => $asalSMA, 'no_identitas' => $no_identitas, 'jenis_identitas' => $jenis_identitas, 'isHariPertama' => $rumpunUI, 'kode_pembayaran' => $kode_pembayaran]
                        );
                    }
                }
                else {
                    $request->session()->flash('arrayPemesan', $request->session()->get('arrayPemesan'));
                    $pesanErrorPeserta = 'Satu peserta hanya boleh memiliki maksimal 1 IPA dan 1 IPS';
                    return view('pages.update-data', compact('pesanErrorPeserta'));
                }
            }
        }
        
        $query = ['email' => $email_pemesan, 'pembayar.kode_pembayaran' => $kode_pembayaran];
        $pembayar = DB::table('pembayar')
                        -> join('pembayaran', 'pembayar.kode_pembayaran', '=', 'pembayaran.kode_pembayaran')
                        -> select('nama', 'email', 'pembayar.kode_pembayaran as kode_bayar', 'isPaid', 'waktu_bayar', 'jumlah_bayar')
                        -> where($query) -> first();

        $request->session()-> flash('dataPembayar', $pembayar);

        return view('pages.payment', compact('pembayar'));

    }
    
    public function isi_data_step2(Request $request) {
        $request -> session() -> reflash();
        $request->session()->flash('arrayPemesan', $request->session()->get('arrayPemesan'));
        $dataPeserta = $this->getDataArray($request);
        
        $request->session()->flash('dataPeserta', $dataPeserta);
        return $this->isi_data_step3($request);
    }

    
    public function isi_data_step3(Request $request) {
        $request -> session() -> reflash();
        $jumlah_tiket = $request->session()->get('arrayPemesan')['jumlahTiket'];
        $kode_pembayaran = $request->session()->get('arrayPemesan')['kode_pembayaran'];
        $deadlineDate = $request->session()->get('arrayPemesan')['deadlineDate'];

        DB::table('pembayaran')->insert(
            ['kode_pembayaran' => $kode_pembayaran, 'waktu_bayar' => $deadlineDate, 'jumlah_bayar' => $jumlah_tiket, 'isPaid' => false]
        );

        $nama_pemesan = $request->session()->get('arrayPemesan')['nama'];
        $email_pemesan = $request->session()->get('arrayPemesan')['email'];
        $nomor_identitas = $request->session()->get('arrayPemesan')['no_id'];
        $no_hp = $request->session()->get('arrayPemesan')['no_hp'];
        $jenis_identitas = $request->session()->get('arrayPemesan')['jenis_id'];
        
        DB::table('pembayar')->insert(
            ['email' => $email_pemesan, 'alamat' => 'Test', 'nomorId' => $nomor_identitas, 'nama' => $nama_pemesan, 'noHP' => $no_hp, 'kode_pembayaran' => $kode_pembayaran, 'jenis_identitas' => $jenis_identitas]
        );

        for ($i = 1; $i <= $jumlah_tiket; $i++) {
            $namaPeserta = $request->session()->get('dataPeserta')[$i]['nama'];
            $email = $request->session()->get('dataPeserta')[$i]['email'];
            $jurusanSMA = $request->session()->get('dataPeserta')[$i]['jurusanSMA'];

            $rumpunUI = $request->session()->get('dataPeserta')[$i]['rumpunUI'];
            $asalSMA = $request->session()->get('dataPeserta')[$i]['asalSMA'];
            $no_identitas = $request->session()->get('dataPeserta')[$i]['no_id'];
            $jenis_identitas = $request->session()->get('dataPeserta')[$i]['jenis_id'];

            $cekPeserta = DB::table('peserta') -> select('email', 'isHariPertama')
                                               -> where('email', '=', $email) -> get();

            if ($cekPeserta -> isEmpty()) {
                DB::table('peserta') -> insertGetId(
                    ['nama' => $namaPeserta, 'jurusan' => $jurusanSMA, 'email' => $email, 'asalSMA' => $asalSMA, 'no_identitas' => $no_identitas, 'jenis_identitas' => $jenis_identitas, 'isHariPertama' => $rumpunUI, 'kode_pembayaran' => $kode_pembayaran]
                );    
            } else {
                if (count($cekPeserta) == 1) {
                    foreach ($cekPeserta as $data) {
                        $cekHari = $data->isHariPertama;
                    }

                    if ($rumpunUI == $cekHari) {
                        $request->session()->flash('arrayPemesan', $request->session()->get('arrayPemesan'));
                        $pesanErrorPeserta = 'Satu peserta tidak boleh memiliki jenis tiket yang sama';
                        return view('pages.isi-data', compact('pesanErrorPeserta'));
                    }
                    else {
                        DB::table('peserta') -> insertGetId(
                            ['nama' => $namaPeserta, 'jurusan' => $jurusanSMA, 'email' => $email, 'asalSMA' => $asalSMA, 'no_identitas' => $no_identitas, 'jenis_identitas' => $jenis_identitas, 'isHariPertama' => $rumpunUI, 'kode_pembayaran' => $kode_pembayaran]
                        );
                    }
                }
                else {
                    $request->session()->flash('arrayPemesan', $request->session()->get('arrayPemesan'));
                    $pesanErrorPeserta = 'Satu peserta hanya boleh memiliki maksimal 1 IPA dan 1 IPS';
                    return view('pages.isi-data', compact('pesanErrorPeserta'));
                }
            }
        }
        
        $query = ['email' => $email_pemesan, 'pembayar.kode_pembayaran' => $kode_pembayaran];
        $pembayar = DB::table('pembayar')
                        -> join('pembayaran', 'pembayar.kode_pembayaran', '=', 'pembayaran.kode_pembayaran')
                        -> select('nama', 'email', 'pembayar.kode_pembayaran as kode_bayar', 'isPaid', 'waktu_bayar', 'jumlah_bayar')
                        -> where($query) -> first();

        $request->session()-> flash('dataPembayar', $pembayar);

        return view('pages.payment', compact('pembayar'));
    }
    
    public function payment(Request $request){
        $request->session()->reflash();

        return view('pages.confirm-payment');
    }
    
    public function confirm_payment(Request $request){
        $request->session()->reflash();
        $nomorReferensi = $request->referensi;
        $namaBank = $request->namabank;
        $tanggalTransfer = $request->tanggal;
        $nomorRekening = $request->noRekening;
        $jumlahBayar = $request->amount;

        DB::table('pembayaran')
            ->where('kode_pembayaran', $nomorReferensi)
            ->update(['isPaid' => 1, 'nama_bank' => $namaBank, 'rekening_pemilik' => $nomorRekening, 'tanggal_transfer' => $tanggalTransfer]);

        return view('pages.success');
    }
    
    public function registrasi_voucher(Request $request){
        $this->validate($request, [
            'namaPeserta' => 'required', 
            'sekolah' => 'required',
            'email' => 'bail|required|email', 
            'nomer-hp' => 'bail|required|noHP',
            'no-identitas' => 'bail|required|numeric',],
            [ 
            'namaPeserta.required'  => '*isi dengan nama Anda',
            'sekolah.required'  => '*isi dengan asal SMA',
            'email.required'  => '*isi dengan email yang valid',
            'email.email'  => '*isi dengan format email yang sesuai',
            'no-identitas.required'  => '*isi dengan nomor identitas Anda',
            'no-identitas.numeric' => '*isi dengan nomor identitas Anda',
            ]);

        $request -> session() -> reflash();

        $namaPeserta = $request->input('namaPeserta');
        $email = $request->input('email');
        $jurusanSMA = $request->input('jurusanSMA');
        $rumpunUI = $request->input('rumpunUI');
        $asalSMA = $request->input('sekolah');
        $no_identitas = $request->input('no-identitas');
        $jenis_identitas = $request->input('jenisId');
        $kodeTiket = $request->session()->get('kodeTiket');

        DB::table('tiket') -> where('kode_tiket', $kodeTiket) -> update(['isTaken' => 1]);
        DB::table('voucher') -> where('kode_tiket', $kodeTiket) -> update(['isTaken' => 1]);
        DB::table('detail_tiket')->where('kode_tiket', $kodeTiket) ->update(['isHariPertama' => $rumpunUI]);

        DB::table('peserta') -> insertGetId(
            ['nama' => $namaPeserta, 'jurusan' => $jurusanSMA, 'email' => $email, 'asalSMA' => $asalSMA, 'no_identitas' => $no_identitas, 'jenis_identitas' => $jenis_identitas, 'isHariPertama' => $rumpunUI, 'kode_tiket' => $kodeTiket, 'kode_pembayaran' => $kode_pembayaran]
        );

        $dataDownloadTiket = new \stdClass();
        $dataDownloadTiket->nama = $namaPeserta;
        $dataDownloadTiket->kodeTiket = $kodeTiket;

        return view('pages.download-tiket', compact('dataDownloadTiket'));
    }

    public function download_tiket(){
        return view('pages.download-tiket');
    }

    public function tracking(){
        return view('pages.tracking');
    }

    public function tracking_telusur(Request $request) {
         $this->validate($request, [
            'email-peserta' => 'bail|required|email',
            // 'nomor-transaksi' => 'bail|required|numeric',
            ],
            [ 'email-peserta.required' => '*Isi dengan email yang digunakan untuk membeli tiket',
            'email-peserta.email' => '*Isi dengan email yang digunakan untuk membeli tiket',
            // 'nomor-transaksi.required' => '*Isi dengan nomor referensi transaksi Anda',
            // 'nomor-transaksi.numeric' => '*Isi dengan nomor referensi transaksi Anda',
            ]);

        $email = $request->input('email-peserta');
        // $nomorTransaksi = $request->input('nomor-transaksi');

        if(isset($email)) {   // && isset($nomorTransaksi)) {
            $query = ['email' => $email]; //, 'pembayar.kode_pembayaran' => $nomorTransaksi];
            $pembayar = DB::table('pembayar')
                            -> join('pembayaran', 'pembayar.kode_pembayaran', '=', 'pembayaran.kode_pembayaran')
                            -> select('nama', 'email', 'pembayar.kode_pembayaran as kode_bayar', 'isPaid', 'waktu_bayar', 'jumlah_bayar', 'noHP', 'nomorId', 'jenis_identitas')
                            -> where($query) -> first();

            if(isset($pembayar)) { // Jika dia membeli tiket
                $jumlah_bayar = $pembayar->jumlah_bayar;
                $kode_pembayaran = $pembayar->kode_bayar;
                $peserta = DB::select(DB::raw("SELECT count(*) as jumlah FROM peserta WHERE kode_pembayaran = '$kode_pembayaran'"));
                $jumlah_terdaftar = $peserta[0]->jumlah;

                if ($peserta[0]->jumlah != $jumlah_bayar) {
                    $peserta = DB::table('peserta')
                                 ->select('nama', 'asalSMA', 'email', 'no_identitas', 'jenis_identitas', 'jurusan', 'isHariPertama')
                                 ->where('kode_pembayaran', '=', $kode_pembayaran)
                                 ->get();

                    // return $peserta;

                    $arrayPemesan =['pemesan' => $pembayar, 'peserta' => $peserta, 'jumlah_terdaftar' => $jumlah_terdaftar, 'jumlahTiket' => $pembayar->jumlah_bayar, 'isUpdate' => 1];
                    // return $arrayPemesan;
                    $request -> session() -> flash('arrayPemesan', $arrayPemesan);
                    return view('pages.update-data', compact('arrayPemesan'));
                } else {
                    if ($pembayar->isPaid == 1) {
                        // dia udah bayar
                        $request->session()-> flash('dataPembayar', $pembayar);
                        return view('pages.payment', compact('pembayar'));
                    } else { // Jika dia belum bayar / belum lunas
                        $request->session()-> flash('dataPembayar', $pembayar);
                        return view('pages.payment', compact('pembayar'));
                    }
                }
            } else {
                $belum_beli = true;
                return view('pages.tracking', compact('belum_beli'));
            }
        }
    }

    public function activate(Request $request) {
         $this->validate($request, [
            'ticketVoucherNumber' => 'required',],
            [ 'ticketVoucherNumber.required' => '*isi dengan nomor voucher Anda',
            ]);

        $kodeVoucher = $request->input('ticketVoucherNumber');

        if (strlen($kodeVoucher) == 10) {
            $kodeTiket = DB::table('voucher')
                            -> select(array('kode_tiket', 'isTaken'))
                            -> where('kode_voucher', '=', $kodeVoucher) -> first();
        }

        if (isset($kodeTiket)) {
            if ($kodeTiket->isTaken == 0) {
                $request->session()->flash('kodeTiket', $kodeTiket->kode_tiket);
                return view('pages.voucher-registration', compact('kodeTiket'));
            }
            else {
                $salahKodeVoucher = 'Kode Voucher Sudah Digunakan';
                return view('pages.aktivasi-voucher', compact('salahKodeVoucher'));
            }
        }
        else {
            $salahKodeVoucher = 'Kode Voucher Salah';
            return view('pages.aktivasi-voucher', compact('salahKodeVoucher'));
        }
    }

    public function faq(){
        return view('pages.faq');
    }

    public function soldOut() {
        return view('pages.sold-out');
    }
}
