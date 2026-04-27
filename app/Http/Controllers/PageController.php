<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function prosesLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if ($username === 'admin' && $password === '123') {

            session([
                'login' => true,
                'username' => $username
            ]);

            return redirect()->route('beranda');
        }

        return redirect()->route('login')->with('error','Username atau password salah!');
    }

    public function beranda(Request $request)
    {
        if (!session('login')) {
            return redirect()->route('login');
        }
        $username = $request->query('username');

        return view('beranda', compact('username'));
    }

    public function profil(Request $request)
    {
        if (!session('login')) {
            return redirect()->route('login');
        }
        $username = $request->query('username');

        return view('profil', compact('username'));
    }

    public function pengelolaan()
    {
        if (!session('login')) {
            return redirect()->route('login');
        }
        $paket = [
            [
                'nama' => 'Silver Package',
                'harga' => '15.000.000',
                'fasilitas' => 'Dekorasi, Catering 200 pax, Dokumentasi',
                'status' => 'Tersedia'
            ],
            [
                'nama' => 'Gold Package',
                'harga' => '25.000.000',
                'fasilitas' => 'Dekorasi Premium, Catering 400 pax, Foto & Video',
                'status' => 'Best Seller'
            ],
            [
                'nama' => 'Platinum Package',
                'harga' => '40.000.000',
                'fasilitas' => 'All-in lengkap + Wedding Organizer Full Service',
                'status' => 'Eksklusif'
            ]
        ];

        return view('pengelolaan', compact('paket'));
    }
}
