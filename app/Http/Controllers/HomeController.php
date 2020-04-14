<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $credential = $request->only("username", "password");
        if (Auth::attempt($credential)) {
            // Meneruskan ke halaman daftar mahasiswa jika sukses
            return redirect()->route("mahasiswa.index");
        } else {
            // Mengembalikan ke halaman login jika gagal
            return redirect()->back();
        }
    }

    /**
     * Logout user
     */
    public function logout()
    {
        Auth::logout(); // logout user

        // redirect ke halaman login
        return redirect()->route("login");
    }
}
