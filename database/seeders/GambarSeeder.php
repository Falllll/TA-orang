<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gambar;
use Carbon\Carbon;

class GambarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gambar = Gambar::create([
            'title' => 'Mamas',
            'image' => 'mamba.png',
            'content' => 'lililrirlirlrilri',
        ]);
    }
}
