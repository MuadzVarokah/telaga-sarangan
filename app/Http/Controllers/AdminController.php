<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\HargaTiket;
use App\Models\KatUMKM;

class AdminController extends Controller
{
    public function index()
    {
        $now = Carbon::now();
        $weekStartDate = $now->startOfWeek()->format('Y-m-d H:i:s');
        $weekEndDate = $now->endOfWeek()->format('Y-m-d H:i:s');
        $end = $now->endOfWeek(Carbon::SUNDAY);

        $tiket = DB::table('tiket')->get();
        $hitung = DB::table('tiket')->where('status', 'sudah dibayar')->pluck('jumlah_tiket');
        $jumlah = $hitung->sum();
        $terjual = DB::table('tiket')
            ->join('users', 'users.id', '=', 'tiket.id_user')
            ->join('harga_tiket', 'harga_tiket.id_harga_tiket', '=', 'tiket.id_harga_tiket')
            ->where('status', 'sudah dibayar')
            ->where('waktu_kunjungan', '>', $weekStartDate)
            ->get();
        $lastMonth =  $now->subMonth()->format('Y-m-d H:i:s');
        $after = DB::table('tiket')->where('waktu_kunjungan', '>', $lastMonth)->count();
        $before = DB::table('tiket')->where('waktu_kunjungan', '<', $lastMonth)->count();
        $htgumkm = DB::table('umkm')->count();

        // dd($terjual);
        return view('admin', compact('tiket', 'jumlah', 'terjual', 'htgumkm', 'before', 'after'));
    }

    public function tiket()
    {
        $harga_tiket = DB::table('harga_tiket')->get();
        return view('tiket', compact('harga_tiket'));
    }

    public function ubah_tiket($id)
    {
        $harga_tiket = HargaTiket::findOrFail($id);
        return view('edit_tiket', ['harga_tiket' => $harga_tiket]);
    }

    public function update_tiket(Request $request, $id)
    {
        $harga_tiket           = HargaTiket::find($id);
        $harga_tiket->nama     = $request->nama;
        $harga_tiket->harga    = $request->harga;
        $harga_tiket->save();

        return redirect('/admin/tiket')->with('success',' Data telah diperbaharui!');
    }

    public function umkm_admin()
    {
        $kat_umkm = DB::table('kat_umkm')->get();
        return view('umkm_admin', compact('kat_umkm'));
    }

    public function simpan_kat_umkm()
    {
        return view('tambah_kat_umkm');
    }

    public function tambah_kat_umkm(Request $request)
    {
        $this->validate($request, [
            'nama'      =>  'required',
            'gambar'    =>  'image|file|mimes:jpeg,png,jpg',
        ]);

        // menyimpan data file yang diupload ke variabel $file
	    $file = $request->file('gambar');
	    $nama_file = time()."_".$file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
	    $tujuan_upload = 'images';
	    $file->move($tujuan_upload,$nama_file);

        KatUMKM::Create([
            'nama'      =>  $request->nama,
            'gambar'    =>  $nama_file,
        ]);
        
        return redirect('/admin/umkm_admin')->with('success',' Data berhasil ditambahkan!');
    }

    public function ubah_kat_umkm($id)
    {
        $kat_umkm = KatUMKM::findOrFail($id);
        return view('edit_kat_umkm', ['kat_umkm' => $kat_umkm]);
    }

    public function update_kat_umkm(Request $request, $id)
    {
        $this->validate($request, [
            'nama'      =>  'required',
            'gambar'    =>  'image|file|mimes:jpeg,png,jpg',
        ]);

        // menyimpan data file yang diupload ke variabel $file
	    $file = $request->file('gambar');
	    $nama_file = time()."_".$file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
	    $tujuan_upload = 'images';
	    $file->move($tujuan_upload,$nama_file);
        
        $kat_umkm           = KatUMKM::find($id);
        $kat_umkm->nama     = $request->nama;
        $kat_umkm->gambar   = $nama_file;
        $kat_umkm->save();

        return redirect('/admin/umkm_admin')->with('success',' Data telah diperbaharui!');
    }

    public function hapus_kat_umkm($id)
    {
        DB::table('kat_umkm')->where('id_kat_umkm', $id)->delete();
        return redirect('/admin/umkm_admin')->with('success',' Data Berhasil Dihapus!');
    }

    public function item_umkm_admin()
    {
        $item_umkm = DB::table('umkm')
            ->join('kat_umkm', 'kat_umkm.id_kat_umkm', '=', 'umkm.id_kat')
            ->get();
        return view('item_umkm', compact('item_umkm'));
    }

    public function data_pengunjung()
    {
        return view('data_pegunjung');
    }

    public function aduan_admin()
    {
        return view('aduan_admin');
    }
    
    public function wahana()
    {
        return view('wahana');
    }
}
