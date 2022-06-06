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
            'harga_tiket' => 'required',
            'id_user' => 'required',
            'waktu_kunjungan' => 'required',
            'jumlah_tiket' => 'required',
            'waktu_beli' => 'required'
        ]);

        // $harga_tiket = 1;
        // $hari = date('D', strtotime($request->waktu_kunjungan));
        // if($hari == ('Sat' || 'Sun')) {
        //     $harga_tiket = 2;
        // };

        Tiket::create($validatedData);

        // $request->session()->flash('success', 'Tiket berhasil dipilih, silahkan lanjutkan pembayaran!');

        //  return view('index');.

        return redirect()->back()->with('success', 'Tiket berhasil dipilih, silahkan lanjutkan pembayaran!');
    }
}