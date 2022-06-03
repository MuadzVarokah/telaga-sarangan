<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
    
    class UmkmController extends Controller
    {
        public function index(){
            
        }

        public function data($id){
            $data = DB::table('umkm')->where("id_kat",$id)->get();
            $group = DB::table('kat_umkm')->where("id_kat_umkm",$id)->first();
            return view('umkm', compact('data','group'));
        }
    }