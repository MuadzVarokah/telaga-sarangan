<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\HargaTiket;
use App\Models\Tiket;
use App\Models\KatUMKM;
use App\Models\UMKM;
use App\Models\User;
use App\Models\Wahana;

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

    // Tiket
    public function tiket()
    {
        $harga_tiket = DB::table('harga_tiket')->get();
        $tiket = DB::table('tiket')
            ->join('users', 'users.id', '=', 'tiket.id_user')
            ->join('harga_tiket', 'harga_tiket.id_harga_tiket', '=', 'tiket.id_harga_tiket')
            ->select('tiket.*', 'users.name', 'harga_tiket.*')
            ->where('status', 'belum dibayar')
            ->latest('id_tiket')->paginate(5);
        // dd($tiket);
        return view('tiket', ['harga_tiket' => $harga_tiket, 'tiket' => $tiket]);
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

        return redirect('/admin/tiket')->with('success', ' Data telah diperbaharui!');
    }

    public function setujui_data_tiket($id)
    {
        $tiket           = Tiket::find($id);
        $tiket->status   = 'sudah dibayar';
        $tiket->save();

        return redirect('/admin/tiket')->with('success', ' Tiket telah disetujui!');
    }

    public function hapus_data_tiket($id)
    {
        DB::table('tiket')->where('id_tiket', $id)->delete();
        return redirect('/admin/tiket')->with('success', ' Tiket Berhasil Dihapus!');
    }
    // End Tiket

    // Kategori UMKM
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
        $nama_file = time() . "_" . $file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'images';
        $file->move($tujuan_upload, $nama_file);

        KatUMKM::Create([
            'nama'      =>  $request->nama,
            'gambar'    =>  $nama_file,
        ]);

        return redirect('/admin/umkm_admin')->with('success', ' Data berhasil ditambahkan!');
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

        if ($request->gambar == NULL) {
            $gambar = $request->gambar_lama;
        } else {
            // menyimpan data file yang diupload ke variabel $file
            $file = $request->file('gambar');
            $nama_file = time() . "_" . $file->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'images';
            $file->move($tujuan_upload, $nama_file);
            $gambar = $nama_file;
        }

        $kat_umkm           = KatUMKM::find($id);
        $kat_umkm->nama     = $request->nama;
        $kat_umkm->gambar   = $gambar;
        $kat_umkm->save();

        return redirect('/admin/umkm_admin')->with('success', ' Data telah diperbaharui!');
    }

    public function hapus_kat_umkm($id)
    {
        DB::table('kat_umkm')->where('id_kat_umkm', $id)->delete();
        return redirect('/admin/umkm_admin')->with('success', ' Data Berhasil Dihapus!');
    }
    // END Kategori UMKM

    // UMKM
    public function item_umkm_admin()
    {
        $item_umkm = DB::table('umkm')
            ->join('kat_umkm', 'kat_umkm.id_kat_umkm', '=', 'umkm.id_kat')
            ->select('umkm.*', 'kat_umkm.nama')
            ->get();
        // dd($item_umkm);
        return view('item_umkm', compact('item_umkm'));
    }

    public function simpan_item_umkm()
    {
        $kat_umkm = DB::table('kat_umkm')->get();
        return view('tambah_item_umkm', compact('kat_umkm'));
    }

    public function tambah_item_umkm(Request $request)
    {
        $this->validate($request, [
            'gambar'        =>  'image|file|mimes:jpeg,png,jpg',
            'keterangan'    =>  'max:255',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('gambar');
        $nama_file = time() . "_" . $file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'images';
        $file->move($tujuan_upload, $nama_file);

        UMKM::Create([
            'id_kat'            =>  $request->id_kat,
            'barang'            =>  $request->barang,
            'gambar'            =>  $nama_file,
            'keterangan'        =>  $request->keterangan,
            'harga_terendah'    =>  $request->harga_terendah,
            'harga_tertinggi'   =>  $request->harga_tertinggi,
        ]);

        return redirect('/admin/item_umkm_admin')->with('success', ' Data berhasil ditambahkan!');
    }

    public function ubah_item_umkm($id)
    {
        $umkm = UMKM::findOrFail($id);
        $kat_umkm = DB::table('kat_umkm')->get();
        return view('edit_item_umkm', ['umkm' => $umkm, 'kat_umkm' => $kat_umkm]);
    }

    public function update_item_umkm(Request $request, $id)
    {
        $this->validate($request, [
            'gambar'        =>  'image|file|mimes:jpeg,png,jpg',
            'keterangan'    =>  'max:255',
        ]);

        if ($request->gambar == NULL) {
            $gambar = $request->gambar_lama;
        } else {
            // menyimpan data file yang diupload ke variabel $file
            $file = $request->file('gambar');
            $nama_file = time() . "_" . $file->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'images';
            $file->move($tujuan_upload, $nama_file);
            $gambar = $nama_file;
        }

        $umkm                   = UMKM::find($id);
        $umkm->barang           = $request->barang;
        $umkm->gambar           = $gambar;
        $umkm->keterangan       = $request->keterangan;
        $umkm->harga_terendah   = $request->harga_terendah;
        $umkm->harga_tertinggi  = $request->harga_tertinggi;
        $umkm->save();

        return redirect('/admin/item_umkm_admin')->with('success', ' Data telah diperbaharui!');
    }

    public function hapus_item_umkm($id)
    {
        DB::table('umkm')->where('id_umkm', $id)->delete();
        return redirect('/admin/item_umkm_admin')->with('success', ' Data Berhasil Dihapus!');
    }
    // END UMKM

    // Data Pengunjung
    public function data_pengunjung()
    {
        $users = DB::table('users')->get();
        return view('data_pengunjung', ['users' => $users]);
    }

    public function ubah_pengunjung($id)
    {
        $users = User::findOrFail($id);
        return view('edit_data_pengunjung', ['users' => $users]);
    }

    public function update_pengunjung(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:255',
            'email' => 'required|email',
            'role' => 'required',
        ]);

        $users          = User::find($id);
        $users->name    = $request->name;
        $users->email   = $request->email;
        $users->role    = $request->role;
        $users->save();

        return redirect('/admin/data_pengunjung')->with('success', ' Data telah diperbaharui!');
    }

    public function hapus_pengunjung($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect('/admin/data_pengunjung')->with('success', ' Data Berhasil Dihapus!');
    }
    // END Data Pengunjung

    // Wahana
    public function wahana()
    {
        $wahana = DB::table('wahana')->get();
        return view('wahana', ['wahana' => $wahana]);
    }

    public function simpan_wahana()
    {
        return view('tambah_wahana');
    }

    public function tambah_wahana(Request $request)
    {
        $this->validate($request, [
            'nama'          =>  'required',
            'gambar'        =>  'image|file|mimes:jpeg,png,jpg',
            'deskripsi'     =>  'required',
            'nama_harga'    =>  'required',
            'harga'         =>  'required',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('gambar');
        $nama_file = time() . "_" . $file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'images';
        $file->move($tujuan_upload, $nama_file);

        Wahana::Create([
            'nama'          =>  $request->nama,
            'gambar'        =>  $nama_file,
            'deskripsi'     =>  $request->deskripsi,
            'nama_harga'    =>  $request->nama_harga,
            'harga'         =>  $request->harga,
            'nama_harga2'   =>  $request->nama_harga2,
            'harga2'        =>  $request->harga2,
        ]);

        return redirect('/admin/wahana')->with('success', ' Data berhasil ditambahkan!');
    }

    public function ubah_wahana($id)
    {
        $wahana = Wahana::findOrFail($id);
        return view('edit_wahana', ['wahana' => $wahana]);
    }

    public function update_wahana(Request $request, $id)
    {
        $this->validate($request, [
            'nama'      =>  'required',
            'gambar'    =>  'image|file|mimes:jpeg,png,jpg',
            'deskripsi' =>  'required',
            'nama_harga'    =>  'required',
            'harga'         =>  'required',
        ]);

        if ($request->gambar == NULL) {
            $gambar = $request->gambar_lama;
        } else {
            // menyimpan data file yang diupload ke variabel $file
            $file = $request->file('gambar');
            $nama_file = time() . "_" . $file->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'images';
            $file->move($tujuan_upload, $nama_file);
            $gambar = $nama_file;
        }

        $wahana                 = Wahana::find($id);
        $wahana->nama           = $request->nama;
        $wahana->gambar         = $gambar;
        $wahana->deskripsi      = $request->deskripsi;
        $wahana->nama_harga     = $request->nama_harga;
        $wahana->harga          = $request->harga;
        $wahana->nama_harga2    = $request->nama_harga2;
        $wahana->harga2         = $request->harga2;
        $wahana->save();

        return redirect('/admin/wahana')->with('success', ' Data telah diperbaharui!');
    }

    public function hapus_wahana($id)
    {
        DB::table('wahana')->where('id_wahana', $id)->delete();
        return redirect('/admin/wahana')->with('success', ' Data Berhasil Dihapus!');
    }
    // END Wahana

    public function aduan_admin()
    {
        return view('aduan_admin');
    }
}
