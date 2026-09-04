<?php

namespace Database\Seeders;

use App\Models\TbUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TbUserSeeder extends Seeder
{
    public function run(): void
    {
        TbUser::create([
            'nama_lengkap' => 'Administrator',
            'username' => 'admin',
            'password' => Hash::make('adminahok'),
            'role' => 'admin',
            'status_aktif' => true,
        ]);
    }
}