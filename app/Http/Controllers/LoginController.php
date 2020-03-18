<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //menampilkan halaman login
    public function showLoginForm()
    {
    	return view("index");

    }

    public function login(Request $request)
    {
    	//dd($request->all());

    	$credential = $request->only("username", "password");
    	//meneruskan ke halaman data mhs jika sukses
    	if(Auth::attempt($credential)) {
    		return redirect()->route("camping.index");
    	} else {
    	//mengembalikan ke halaman login jika gagal
    		return redirect()->back();
    	}
    }
}
