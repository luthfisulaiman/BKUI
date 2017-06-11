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
    
    public function registrasi_voucher(){
    	return view('pages.voucher-registration');
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
