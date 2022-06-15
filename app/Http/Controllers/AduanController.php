<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AduanController extends Controller
{

    public function index()
    {
        $kat_aduan = DB::table('kat_aduan')->where('status', 'Aktif')->latest('id')->get();
        // dd($kat_aduan);
        return view('aduansaran', ['kat_aduan' => $kat_aduan]);
    }

    public function tambah(Request $request)
    {
        $captchaResult = $_POST["captchaResult"];
        $firstNumber = $_POST["firstNumber"];
        $secondNumber = $_POST["secondNumber"];

        $checkTotal = $firstNumber + $secondNumber;

        if ($captchaResult == $checkTotal) {
            DB::table('aduan_saran_publik')->insert([
                'id' => null,
                'jenis' => $request->jenis,
                'nama' => $request->nama,
                'email' => $request->email,
                'no_hp' => $request->no_hp,
                'saran_aduan' => $request->saran_aduan,
                'kategori' => $request->kategori,
                'waktu' => $request->waktu
            ]);
            return redirect('/index')->with('message', 'Berhasil mengajukan aduan/saran.');
        } else {
            return back()->with('message', 'Hasil penjumlahan salah.');
        }
    }
}