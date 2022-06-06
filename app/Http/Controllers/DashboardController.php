<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        return view('index');
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



        // $request->session()->flash('success', 'Registrasi berhasil');

        return redirect()->back()->with('success', 'Registrasi berhasil');
    }
}
