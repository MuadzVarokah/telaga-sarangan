<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $now = Carbon::now();
        $weekStartDate = $now->startOfWeek()->format('Y-m-d H:i:s');
        $weekEndDate = $now->endOfWeek()->format('Y-m-d H:i:s');
        $end = $now->endOfWeek(Carbon::SUNDAY);

        $tiket = DB::table('tiket')->get();
        $hitung = DB::table('tiket')->where('status','sudah dibayar')->pluck('jumlah_tiket');
        $jumlah = $hitung->sum();
        $terjual = DB::table('tiket')
        ->join('users','users.id','=','tiket.id_user')
        ->join('harga_tiket','harga_tiket.id_harga_tiket','=','tiket.id_harga_tiket')
        ->where('status','sudah dibayar')
        ->where('waktu_kunjungan','>',$weekStartDate)
        ->get();
        $lastMonth =  $now->subMonth()->format('Y-m-d H:i:s');
        $after = DB::table('tiket')->where('waktu_kunjungan','>',$lastMonth)->count();
        $before = DB::table('tiket')->where('waktu_kunjungan','<',$lastMonth)->count();
        $htgumkm = DB::table('umkm')->count();
        //dd($terjual);
        return view('admin',compact('tiket','jumlah','terjual','htgumkm','before','after'));
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
