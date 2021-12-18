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
            'nama_user' => 'Padil',
            'nip' => '261201',
            'email' => 'padel@hah.com',
            'password' => bcrypt('pitra'),
            'role' => 'Kepala Sekolah'
        ]);
    }
}
