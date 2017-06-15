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
    public function admin(){
        return view('pages.admin');
    }
    public function index(){
    	return view('pages.menu');
    }
    
    public function aktivasi_voucher(){
    	return view('pages.aktivasi-voucher');
    }
    
    public function beli(){
    	return view('pages.beli');
    }

    public function beliSubmit(Request $request) {
        $this->validate($request, [
            'nama-pemesan' => 'required',
            'email' => 'bail|required|email', 
            'no-identitas' => 'bail|required|numeric',
            'nomer-hp' => 'bail|required|noHP',],
            [ 'nama-pemesan.required' => '*isi nama pemesan',
            'email.required'  => '*isi dengan email Anda',
            'email.email'  => '*isi dengan format email yang sesuai',
            'no-identitas.required'  => '*isi dengan nomor identitas Anda',
            'no-identitas.numeric' => '*isi dengan nomor identitas Anda',
            'nomer-hp.required' => '*isi dengan nomor Hp Anda',
            ]);

        $nama_pemesan = $request->input('nama-pemesan');
        $randnum = rand(11111111,99999999);
        $deadlineDate = Carbon::parse('+3 days')->toDateTimeString();
        $kodePembayaran = '';

        while(true) {
            $kodePembayaran = 'K' . $randnum . 'P';
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

        $arrayPemesan = array('nama' => $nama_pemesan, 'email' => $email_pemesan, 'no_id' => $no_identitas_pemesan, 'jenis_id' => $jenis_identitas_pemesan, 'no_hp' => $no_hp_pemesan, 'jumlahTiket' => $jumlah_tiket_pemesan, 'kode_pembayaran' => $kodePembayaran, 'deadlineDate' => $deadlineDate);

        $request -> session() -> flash('arrayPemesan', $arrayPemesan);

        return view('pages.isi-data', compact('arrayPemesan'));
    }

    
    public function isi_data(Request $request) {
        $request -> session() -> reflash();

        $kode_pembayaran = $request->session()->get('arrayPemesan')['kode_pembayaran'];
        $deadlineDate = $request->session()->get('arrayPemesan')['deadlineDate'];
        $jumlah_tiket = $request->session()->get('arrayPemesan')['jumlahTiket'];

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
            $namaPeserta = $request->input('namaPeserta_'.$i);
            $email = $request->input('email_'.$i);
            $jurusanSMA = $request->input('jurusanSMA_'.$i);
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

            DB::table('peserta') -> insertGetId(
                ['nama' => $namaPeserta, 'jurusan' => $jurusanSMA, 'email' => $email, 'asalSMA' => $asalSMA, 'no_identitas' => $no_identitas, 'jenis_identitas' => $jenis_identitas, 'isHariPertama' => $rumpunUI]
            );
        }

        $query = ['email' => $email_pemesan, 'pembayar.kode_pembayaran' => $kode_pembayaran];
        $pembayar = DB::table('pembayar')
                        -> join('pembayaran', 'pembayar.kode_pembayaran', '=', 'pembayaran.kode_pembayaran')
                        -> select('email', 'pembayar.kode_pembayaran', 'isPaid', 'waktu_bayar', 'jumlah_bayar')
                        -> where($query) -> first();

        return view('pages.payment');
    }
    
    public function payment(){
        $arrayPembayar = DB::table('pembayar')
                            -> join('pembayaran', 'pembayar.kode_pembayaran', '=', 'pembayaran.kode_pembayaran')
                            -> select(array('waktu_bayar', 'jumlah_bayar'))
                            -> first();

    	return view('pages.payment', compact('arrayPembayar'));
    }
    
    public function confirm_payment(){
    	return view('pages.confirm-payment');
    }
    
    public function registrasi_voucher(Request $request){
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
            ['nama' => $namaPeserta, 'jurusan' => $jurusanSMA, 'email' => $email, 'asalSMA' => $asalSMA, 'no_identitas' => $no_identitas, 'jenis_identitas' => $jenis_identitas, 'isHariPertama' => $rumpunUI, 'kode_tiket' => $kodeTiket]
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
        $email = $request->input('email-peserta');
        $nomorTransaksi = $request->input('nomor-transaksi');

        if(isset($email) && isset($nomorTransaksi)) {
            $query = ['email' => $email, 'pembayar.kode_pembayaran' => $nomorTransaksi];
            $pembayar = DB::table('pembayar')
                            -> join('pembayaran', 'pembayar.kode_pembayaran', '=', 'pembayaran.kode_pembayaran')
                            -> select('email', 'pembayar.kode_pembayaran as kode_bayar', 'isPaid', 'waktu_bayar', 'jumlah_bayar')
                            -> where($query) -> first();

            if(isset($pembayar)) { // Jika dia membeli tiket
                if ($pembayar->isPaid == 1) {
                    // dia udah bayar
                } else { // Jika dia belum bayar / belum lunas
                    return view('pages.payment', compact('pembayar'));
                }
            } else {
                $belum_beli = true;
                return view('pages.beli', compact('belum_beli'));
            }
        }
    }

    public function activate(Request $request) {
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
}
