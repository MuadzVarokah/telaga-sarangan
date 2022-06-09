<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Tiket;


class LoginController extends Controller
{
    public function index(Request $request)
    {
        $credentials = $request->validate([
            'email'     => 'required|email:dns',
            'password'  => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $role = $request->user()->role;
            
            if($role == 'admin'){
                return redirect()->intended('/admin');
            } else {
                return redirect()->intended('/user');
            }
            
        }

        return redirect()->back()->with('loginError', 'Login Gagal!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function user(Request $request)
    {   
        if(auth()->guest()) {
            abort(403);
        };

        if(auth()->user()->role !== 'user') {
            abort(403);
        };

        $riwayat = Tiket::join('harga_tiket','harga_tiket.id_harga_tiket','=','tiket.id_harga_tiket')
        ->where('id_user',Auth::id())
        ->get();   
        $wahana = DB::table('wahana')
        ->join ('harga', 'harga.id_wahana','=','wahana.id_wahana')
        ->select('nama','deskripsi','gambar','nama_harga','harga','nama_harga2','harga2')
        ->distinct()
        ->get();
        $wahana = $wahana->unique('deskripsi');
        //$wahana = array_slice($wahana->values()->all(), 0, 5, true);
        //dd($wahana);
        return view('index',compact('riwayat','wahana'));
    }

    public function admin(Request $request)
    {
        if(auth()->guest()) {
            abort(403);
        };

        if(auth()->user()->role !== 'admin') {
            abort(403);
        };

        return view('admin');
    }
}
