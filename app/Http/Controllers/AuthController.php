<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    // Show login page
    public function showLogin()
    {
        return view('auth.login');
    }

    // Handle Anggota login (using Cookie)
    public function loginAnggota(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ], [
            'email.required' => 'Email harus diisi',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password harus diisi',
            'password.min' => 'Password minimal 6 karakter',
        ]);

        $anggota = Anggota::where('email', $request->email)->first();

        if (!$anggota || !Hash::check($request->password, $anggota->password)) {
            return back()->withErrors(['email' => 'Email atau password salah'])->withInput();
        }

        if ($anggota->status !== 'aktif') {
            return back()->withErrors(['email' => 'Akun Anda tidak aktif'])->withInput();
        }

        // Create cookie for Anggota (valid for 7 days)
        $cookie = Cookie::make(
            'anggota_id',
            $anggota->id,
            60 * 24 * 7, // 7 days
            null,
            null,
            false,
            true // httpOnly
        );

        return redirect()->route('anggota.dashboard')
            ->cookie($cookie)
            ->with('success', 'Login berhasil sebagai Anggota');
    }

    // Handle Admin login (using Session)
    public function loginAdmin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ], [
            'email.required' => 'Email harus diisi',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password harus diisi',
            'password.min' => 'Password minimal 6 karakter',
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if (!$admin || !Hash::check($request->password, $admin->password)) {
            return back()->withErrors(['email' => 'Email atau password salah'])->withInput();
        }

        if ($admin->status !== 'aktif') {
            return back()->withErrors(['email' => 'Akun Anda tidak aktif'])->withInput();
        }

        // Store in session for Admin
        session([
            'admin_id' => $admin->id,
            'admin_name' => $admin->nama,
            'admin_email' => $admin->email,
            'admin_role' => $admin->role,
        ]);

        return redirect()->route('admin.dashboard')
            ->with('success', 'Login berhasil sebagai Admin');
    }

    // Logout Anggota
    public function logoutAnggota()
    {
        return redirect()->route('login')
            ->cookie(Cookie::forget('anggota_id'))
            ->with('success', 'Logout berhasil');
    }

    // Logout Admin
    public function logoutAdmin()
    {
        session()->forget(['admin_id', 'admin_name', 'admin_email', 'admin_role']);
        return redirect()->route('login')
            ->with('success', 'Logout berhasil');
    }
}
