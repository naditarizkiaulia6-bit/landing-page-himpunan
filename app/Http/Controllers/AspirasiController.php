<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    public function index()
    {
        return view('landing.aspirasi');
    }

    public function store(Request $request)
    {
        Aspirasi::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'isi_aspirasi' => $request->isi_aspirasi,
        ]);

        return redirect('/aspirasi')->with('success', 'Aspirasi berhasil dikirim!');
    }
}