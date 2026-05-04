<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Check if user is logged in via session
    protected function checkAuth()
    {
        if (!session()->has('admin_id')) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu');
        }
        return Admin::find(session('admin_id'));
    }

    // Show admin dashboard
    public function dashboard()
    {
        $admin = $this->checkAuth();
        if ($admin instanceof \Illuminate\Http\RedirectResponse) {
            return $admin;
        }

        $totalAnggota = Anggota::count();
        $anggotaAktif = Anggota::where('status', 'aktif')->count();
        $anggotaNonaktif = Anggota::where('status', 'nonaktif')->count();

        return view('admin.dashboard', compact('admin', 'totalAnggota', 'anggotaAktif', 'anggotaNonaktif'));
    }

    // Show all members
    public function listAnggota()
    {
        $admin = $this->checkAuth();
        if ($admin instanceof \Illuminate\Http\RedirectResponse) {
            return $admin;
        }

        $anggotas = Anggota::paginate(10);
        return view('admin.list-anggota', compact('admin', 'anggotas'));
    }

    // Show create member form
    public function createAnggota()
    {
        $admin = $this->checkAuth();
        if ($admin instanceof \Illuminate\Http\RedirectResponse) {
            return $admin;
        }

        return view('admin.create-anggota', compact('admin'));
    }

    // Store new member
    public function storeAnggota(Request $request)
    {
        $admin = $this->checkAuth();
        if ($admin instanceof \Illuminate\Http\RedirectResponse) {
            return $admin;
        }

        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:anggotas',
            'password' => 'required|min:6|confirmed',
            'nim' => 'required|unique:anggotas',
            'no_telepon' => 'nullable|string|max:20',
            'alamat' => 'nullable|string|max:255',
            'jurusan' => 'nullable|string|max:100',
            'tahun_masuk' => 'nullable|string|max:4',
        ]);

        Anggota::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'nim' => $request->nim,
            'no_telepon' => $request->no_telepon,
            'alamat' => $request->alamat,
            'jurusan' => $request->jurusan,
            'tahun_masuk' => $request->tahun_masuk,
            'status' => 'aktif',
        ]);

        return redirect()->route('admin.list-anggota')
            ->with('success', 'Anggota berhasil ditambahkan');
    }

    // Show edit member form
    public function editAnggota($id)
    {
        $admin = $this->checkAuth();
        if ($admin instanceof \Illuminate\Http\RedirectResponse) {
            return $admin;
        }

        $anggota = Anggota::findOrFail($id);
        return view('admin.edit-anggota', compact('admin', 'anggota'));
    }

    // Update member
    public function updateAnggota(Request $request, $id)
    {
        $admin = $this->checkAuth();
        if ($admin instanceof \Illuminate\Http\RedirectResponse) {
            return $admin;
        }

        $anggota = Anggota::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:anggotas,email,' . $id,
            'nim' => 'required|unique:anggotas,nim,' . $id,
            'no_telepon' => 'nullable|string|max:20',
            'alamat' => 'nullable|string|max:255',
            'jurusan' => 'nullable|string|max:100',
            'tahun_masuk' => 'nullable|string|max:4',
            'status' => 'required|in:aktif,nonaktif',
        ]);

        $anggota->update($request->only([
            'nama', 'email', 'nim', 'no_telepon', 'alamat', 'jurusan', 'tahun_masuk', 'status'
        ]));

        return redirect()->route('admin.list-anggota')
            ->with('success', 'Anggota berhasil diperbarui');
    }

    // Delete member
    public function deleteAnggota($id)
    {
        $admin = $this->checkAuth();
        if ($admin instanceof \Illuminate\Http\RedirectResponse) {
            return $admin;
        }

        $anggota = Anggota::findOrFail($id);
        $anggota->delete();

        return redirect()->route('admin.list-anggota')
            ->with('success', 'Anggota berhasil dihapus');
    }

    // Show admin profile
    public function profile()
    {
        $admin = $this->checkAuth();
        if ($admin instanceof \Illuminate\Http\RedirectResponse) {
            return $admin;
        }

        return view('admin.profile', compact('admin'));
    }

    // Update admin profile
    public function updateProfile(Request $request)
    {
        $admin = $this->checkAuth();
        if ($admin instanceof \Illuminate\Http\RedirectResponse) {
            return $admin;
        }

        $request->validate([
            'nama' => 'required|string|max:255',
            'no_telepon' => 'nullable|string|max:20',
        ]);

        $admin->update($request->only(['nama', 'no_telepon']));

        session(['admin_name' => $admin->nama]);

        return back()->with('success', 'Profil berhasil diperbarui');
    }
}
