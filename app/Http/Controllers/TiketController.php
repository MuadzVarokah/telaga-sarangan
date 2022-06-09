<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tiket;
use Symfony\Contracts\Service\Attribute\Required;

class TiketController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function pesan(Request $request)
    {
        $validatedData = $request->validate([
            'id_user' => 'required',
            'waktu_kunjungan' => 'required',
            'jumlah_tiket' => 'required',
            'waktu_beli' => 'required',
            'status' => 'required',
            'harga_jasa' => 'required',
            'kode_pembayaran' => 'required',
            'jenis_pembayaran' => 'required',
            'id_harga_tiket' => 'required',
        ]);


        // $harga_tiket = 1;
        // $hari = date('D', strtotime($request->waktu_kunjungan));
        // if($hari == ('Sat' || 'Sun')) {
        //     $harga_tiket = 2;
        // };   

        Tiket::create($validatedData);

        // $request->session()->flash('success', 'Tiket berhasil dipilih, silahkan lanjutkan pembayaran!');

        //  return view('index');.

        return redirect()->back()->with('success', 'Tiket berhasil dipesan, silahkan lanjutkan pembayaran!');
    }
}
