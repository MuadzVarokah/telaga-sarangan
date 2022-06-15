<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $tiket = DB::table('tiket')->get();
        $hitung = DB::table('tiket')->where('status','sudah dibayar')->pluck('jumlah_tiket');
        $jumlah = $hitung->sum();
        $terjual = DB::table('tiket')
        ->join('users','users.id','=','tiket.id_user')
        ->where('status','sudah dibayar')
        ->get();
        $htgumkm = DB::table('umkm')->count();
        //dd($terjual);
        return view('admin',compact('tiket','jumlah','terjual','htgumkm'));
    }

    public function tiket()
    {
        return view('tiket');
    }

    public function wahana()
    {
        return view('wahana');
    }

    public function umkm_admin()
    {
        return view('umkm_admin');
    }

    public function item_umkm_admin()
    {
        return view('item_umkm');
    }

    public function data_pengunjung()
    {
        return view('data_pegunjung');
    }
}
