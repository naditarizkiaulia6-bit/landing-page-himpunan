<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;

class AnggotaController extends Controller
{
    // Check if user is logged in via cookie
    protected function checkAuth()
    {
        $anggotaId = request()->cookie('anggota_id');
        if (!$anggotaId) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu');
        }
        return Anggota::find($anggotaId);
    }

    // Show dashboard
    public function dashboard()
    {
        $anggota = $this->checkAuth();
        if ($anggota instanceof \Illuminate\Http\RedirectResponse) {
            return $anggota;
        }

        return view('anggota.dashboard', compact('anggota'));
    }

    // Show profile edit form
    public function editProfile()
    {
        $anggota = $this->checkAuth();
        if ($anggota instanceof \Illuminate\Http\RedirectResponse) {
            return $anggota;
        }

        return view('anggota.edit-profile', compact('anggota'));
    }

    // Update profile
    public function updateProfile(Request $request)
    {
        $anggota = $this->checkAuth();
        if ($anggota instanceof \Illuminate\Http\RedirectResponse) {
            return $anggota;
        }

        $request->validate([
            'nama' => 'required|string|max:255',
            'no_telepon' => 'nullable|string|max:20',
            'alamat' => 'nullable|string|max:255',
            'jurusan' => 'nullable|string|max:100',
            'tahun_masuk' => 'nullable|string|max:4',
            'foto_profil' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['nama', 'no_telepon', 'alamat', 'jurusan', 'tahun_masuk']);

        // Handle file upload
        if ($request->hasFile('foto_profil')) {
            $file = $request->file('foto_profil');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/profil'), $filename);
            $data['foto_profil'] = 'uploads/profil/' . $filename;
        }

        $anggota->update($data);

        return redirect()->route('anggota.dashboard')
            ->with('success', 'Profil berhasil diperbarui');
    }

    // Change password
    public function changePassword(Request $request)
    {
        $anggota = $this->checkAuth();
        if ($anggota instanceof \Illuminate\Http\RedirectResponse) {
            return $anggota;
        }

        $request->validate([
            'password_lama' => 'required|min:6',
            'password_baru' => 'required|min:6|confirmed',
        ], [
            'password_lama.required' => 'Password lama harus diisi',
            'password_baru.required' => 'Password baru harus diisi',
            'password_baru.confirmed' => 'Konfirmasi password tidak cocok',
        ]);

        if (!Hash::check($request->password_lama, $anggota->password)) {
            return back()->withErrors(['password_lama' => 'Password lama tidak sesuai']);
        }

        $anggota->update(['password' => Hash::make($request->password_baru)]);

        return back()->with('success', 'Password berhasil diubah');
    }
}
