<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'nik' => '5553332226662221',
            'address' => 'Jalan Admin',
            'birthdate' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
