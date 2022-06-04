<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tiket;
    
class TiketController extends Controller
    {
        public function index(){
            return view('index');
        }

        public function pesan(Request $request)
        {
            $this->validate($request, [
                'id_tiket' => 'required',
                'harga_tiket' => 'required',
                'id_user' => 'required',
                'waktu_kunjungan' => 'required',
                'jumlah_tiket' => 'required',
                'waktu_beli' => 'required'
            ]);

            $tiket = Tiket::create([
                'id_tiket' => null,
                'id_user' => null,
                'waktu_kunjungan' => $request->waktu_kunjungan,
                'jumlah_tiket' => $request->jumlah_tiket,
                'waktu_beli' => null,
                'harga_tiket' => null,
            ]);
            return redirect('index')->with(['success' => 'Pemesanan Berhasil']);

        }
    }