<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Prodi;
use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Prodi::create([
            'nama_prodi' => 'Bisnis Digital'
        ]);

        Prodi::create([
            'nama_prodi' => 'Manajemen Informatika'
        ]);

        prodi::factory(10)->create();

        Mahasiswa::create([
            'nim' => 'E020322090',
            'nama' => 'Assyifa',
            'no_hp' => '082159545158',
            'alamat' => 'jalan HKSN',
            'foto' => 'E020322090.jpeg',
            'password' => '123',
            'prodi_id' => 1,  
        ]);

        Mahasiswa::create([
            'nim' => 'E020322099',
            'nama' => 'Nornadzilla',
            'no_hp' => '08333445567',
            'alamat' => 'jalan HKSN',
            'foto' => 'E020322090.jpeg',
            'password' => '123',
            'prodi_id' => 2,  
        ]);

        Mahasiswa::factory(100)->create();
    }
}
