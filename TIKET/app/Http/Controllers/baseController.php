<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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
            'nomer-hp' => 'required',],
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
        $nama = $request->input('namaPeserta');
        $jurusanSMA = $request->input('jurusan');
        $email = $request->input('email');
        $isHariPertama = $request->input('hariH');
    	$kodeTiket = DB::table('tiket')
                            -> select(array('kode_tiket', 'isTaken'))
                            -> where('kode_tiket', '=', $request->input('kodeTiket')) -> first();

        if ($kodeTiket) {
            if ($kodeTiket->isTaken == 0) {
                $kodeTiket = $kodeTiket->kode_tiket;

                DB::table('tiket') -> where('kode_tiket', $kodeTiket) -> update(['isTaken' => 1]);
                DB::table('voucher') -> where('kode_tiket', $kodeTiket) -> update(['isTaken' => 1]);

                DB::table('peserta')->insertGetId(
                    ['nama' => $nama, 'jurusan' => $jurusanSMA, 'email' => $email, 'kode_tiket' => $kodeTiket]
                );
                
                return view('pages.menu');
            }
            else {
                $salahKodeVoucher = 'Kode Voucher Sudah Digunakan';
                return view('pages.aktivasi-voucher', compact('salahKodeVoucher'));
            }
        }
        else {
            return view('pages.aktivasi-voucher');
        }
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
                            -> select('email', 'pembayar.kode_pembayaran', 'isPaid', 'waktu_bayar')
                            -> where($query) -> first();

            if(isset($pembayar)) { // Jika dia membeli tiket
                if ($pembayar->isPaid == 1) {
                    // dia udah bayar
                } else { // Jika dia belum bayar / belum lunas
                    $waktu_bayar = $pembayar->waktu_bayar;
                    return view('pages.payment', compact('waktu_bayar'));
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
}
