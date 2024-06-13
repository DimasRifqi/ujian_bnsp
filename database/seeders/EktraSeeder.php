<?php

namespace Database\Seeders;

use App\Models\Ekstra;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EktraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Ekstra::insert([
            [
                'nama' => 'Desain',
                'foto' => 'template_asset/img/ekstra/desain.jpg',
                'anggota' => 5,
            ],
            [
                'nama' => 'Pramuka',
                'foto' => 'template_asset/img/ekstra/pramuka.jpg',
                'anggota' => 10,
            ],
        ]);
    }
}