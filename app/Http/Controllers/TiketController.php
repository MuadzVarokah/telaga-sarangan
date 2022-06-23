<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tiket;
use phpDocumentor\Reflection\Types\Mixed_;
use Symfony\Contracts\Service\Attribute\Required;

class TiketController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function pesan(Request $request)
    {
        $this->validate($request, [
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

        $kunjungan = date_create($request->waktu_kunjungan);
        $waktu_kunjungan = date_format($kunjungan, 'Y-m-d H:i:01');

        $harga_tiket = DB::table('harga_tiket')->where('id_harga_tiket', $request->id_harga_tiket)
            ->select('harga_tiket.harga')->first();
        $jumlah_tiket = $request->jumlah_tiket;
        $harga_jasa = $request->harga_jasa;
        $harga_total = $jumlah_tiket * $harga_tiket->harga + $harga_jasa;

        // $pretiket = [
        //     $harga_tiket->harga,
        //     $jumlah_tiket,
        //     $harga_jasa,
        //     $harga_total,
        // ];

        $tiket = [
            'id_user'           =>  $request->id_user,
            'id_harga_tiket'    =>  $request->id_harga_tiket,
            'waktu_beli'        =>  $request->waktu_beli,
            'waktu_kunjungan'   =>  $waktu_kunjungan,
            'jumlah_tiket'      =>  $request->jumlah_tiket,
            'jenis_pembayaran'  =>  $request->jenis_pembayaran,
            'harga_jasa'        =>  $request->harga_jasa,
            'harga_total'       =>  $harga_total,
            'kode_pembayaran'   =>  $request->kode_pembayaran,
            'status'            =>  $request->status,
        ];

        // dd($pretiket);

        Tiket::create($tiket);

        // $request->session()->flash('success', 'Tiket berhasil dipilih, silahkan lanjutkan pembayaran!');

        //  return view('index');.

        return redirect()->back()->with('success', 'Tiket berhasil dipesan, silahkan lanjutkan pembayaran!');
    }
}
