<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Anggota;
use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create test Anggota (Member) accounts
        Anggota::create([
            'nama' => 'Budi Santoso',
            'email' => 'budi@hmit.com',
            'password' => Hash::make('password123'),
            'nim' => '2023001',
            'no_telepon' => '081234567890',
            'alamat' => 'Jl. Merdeka No. 123, Jakarta',
            'jurusan' => 'Informatika',
            'tahun_masuk' => '2023',
            'status' => 'aktif',
        ]);

        Anggota::create([
            'nama' => 'Siti Nurhaliza',
            'email' => 'siti@hmit.com',
            'password' => Hash::make('password123'),
            'nim' => '2023002',
            'no_telepon' => '082345678901',
            'alamat' => 'Jl. Sudirman No. 456, Jakarta',
            'jurusan' => 'Informatika',
            'tahun_masuk' => '2023',
            'status' => 'aktif',
        ]);

        Anggota::create([
            'nama' => 'Ahmad Wijaya',
            'email' => 'ahmad@hmit.com',
            'password' => Hash::make('password123'),
            'nim' => '2023003',
            'no_telepon' => '083456789012',
            'alamat' => 'Jl. Gatot Subroto No. 789, Jakarta',
            'jurusan' => 'Informatika',
            'tahun_masuk' => '2023',
            'status' => 'aktif',
        ]);

        // Create test Admin accounts
        Admin::create([
            'nama' => 'Admin HMIT',
            'email' => 'admin@hmit.com',
            'password' => Hash::make('admin123'),
            'no_telepon' => '081111111111',
            'role' => 'admin',
            'status' => 'aktif',
        ]);

        Admin::create([
            'nama' => 'Super Admin HMIT',
            'email' => 'superadmin@hmit.com',
            'password' => Hash::make('superadmin123'),
            'no_telepon' => '082222222222',
            'role' => 'super_admin',
            'status' => 'aktif',
        ]);

        // Default test user (optional)
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
