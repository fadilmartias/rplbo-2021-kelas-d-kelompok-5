<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama_user' => 'M. Fadil Martias',
            'nip' => '261201',
            'email' => 'kepsek@gmail.com',
            'password' => bcrypt('kepsek123'),
            'role' => 'Kepala Sekolah'
        ]);
        User::create([
            'nama_user' => 'Imaduddien',
            'nip' => '524311',
            'email' => 'keptu@gmail.com',
            'password' => bcrypt('keptu123'),
            'role' => 'Kepala TU'
        ]);
        User::create([
            'nama_user' => 'Felina Amelia',
            'nip' => '974512',
            'email' => 'staff@gmail.com',
            'password' => bcrypt('staff123'),
            'role' => 'Staff TU'
        ]);
        User::create([
            'nama_user' => 'Eka Suryani',
            'nip' => '836382',
            'email' => 'staff2@gmail.com',
            'password' => bcrypt('staff1234'),
            'role' => 'Staff TU'
        ]);
        User::create([
            'nama_user' => 'M. Taufikur Rahman',
            'nip' => '847492',
            'email' => 'resepsionis@gmail.com',
            'password' => bcrypt('resepsionis123'),
            'role' => 'Resepsionis'
        ]);
    }
}
