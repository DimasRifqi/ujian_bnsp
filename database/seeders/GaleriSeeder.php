<?php

namespace Database\Seeders;

use App\Models\Galeri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Galeri::insert([
            [
                'nama' => 'foto1',
                'foto' => 'template_asset/img/galeri/galeri1.jpg',
            ],
            [
                'nama' => 'foto2',
                'foto' => 'template_asset/img/galeri/galeri2.jpeg',
            ],
            [
                'nama' => 'foto3',
                'foto' => 'template_asset/img/galeri/galeri3.jpeg',
            ],
        ]);
    }
}