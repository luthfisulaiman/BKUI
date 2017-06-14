<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
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
    
    public function isi_data(){
    	return view('pages.isi-data');
    }
    
    public function payment(){
    	return view('pages.payment');
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

                DB::table('detail_tiket')->insert(
                    ['kode_tiket' => $kodeTiket, 'kloter' => 'A', 'isHariPertama' => $isHariPertama, 'kode_pembayaran' => null]
                );

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
