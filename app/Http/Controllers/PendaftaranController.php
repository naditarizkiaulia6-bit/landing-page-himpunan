<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PendaftaranController extends Controller
{
    //
    public function store(Request $request)
    {
        Pendaftaran::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'nim' => $request->nim,
            'no_whatsapp' => $request->no_whatsapp,
            'departemen_pilihan_pertama' => $request->departemen_pilihan_pertama,
            'departemen_pilihan_kedua' => $request->departemen_pilihan_kedua,
        ]);
        return redirect('/daftar')->with('success', 'Pendaftaran berhasil!');
    }
}
