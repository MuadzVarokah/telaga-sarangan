<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
    
    class UmkmController extends Controller
    {
        public function index(){
            $post   = Post::all();
            return view('umkm')->with('post', $post);
        }
    }