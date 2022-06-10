<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Tiket;


class DashboardController extends Controller
{
    public function index()
    {
        $riwayat = [];
        $wahana = DB::table('wahana')
        ->join ('harga', 'harga.id_wahana','=','wahana.id_wahana')
        ->select('nama','deskripsi','gambar','nama_harga','harga','nama_harga2','harga2')
        ->distinct()
        ->get();
        $wahana = $wahana->unique('deskripsi');
        //$wahana = array_slice($wahana->values()->all(), 0, 5, true);
        //dd($wahana);
        return view('index',compact('riwayat', 'wahana'));
    }

    public function registrasi(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255|confirmed',
            'password_confirmation' => 'required|min:5|max:255',
            'role' => 'required',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('success', 'Registrasi berhasil');

        return redirect('/');
    }
}
