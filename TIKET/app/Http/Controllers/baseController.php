<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;

class baseController extends Controller
{
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
                            -> select('kode_tiket')
                            -> where('kode_tiket', '=', $request->input('kodeTiket')) -> first();

        if ($kodeTiket) {
            $kodeTiket = $kodeTiket->kode_tiket;

            DB::table('tiket') -> where('kode_tiket', $kodeTiket) -> update(['isTaken' => 1]);
            DB::table('voucher') -> where('kode_tiket', $kodeTiket) -> update(['isTaken' => 1]);

            DB::table('detail_tiket')->insert(
                ['kode_tiket' => $kodeTiket, 'kloter' => 'A', 'isHariPertama' => $isHariPertama, 'kode_pembayaran' => null]
            );

            DB::table('peserta')->insertGetId(
                ['nama' => $nama, 'jurusan' => $jurusanSMA, 'email' => $email, 'kode_tiket' => $kodeTiket]
            );
            
            return view('pages.voucher-registration');
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

    public function activate(Request $request) {
        $kodeVoucher = $request->input('ticketVoucherNumber');

        if (strlen($kodeVoucher) == 10) {
            $kodeTiket = DB::table('voucher')
                            -> select('kode_tiket')
                            -> where('kode_voucher', '=', $kodeVoucher) -> first();
        }

        if (isset($kodeTiket)) {
            return view('pages.voucher-registration', compact('kodeTiket'));
        }
        else {
            $salahKodeVoucher = TRUE;
            return view('pages.aktivasi-voucher', compact('salahKodeVoucher'));
        }
    }
}
