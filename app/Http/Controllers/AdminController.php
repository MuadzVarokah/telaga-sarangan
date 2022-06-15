<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin');
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
