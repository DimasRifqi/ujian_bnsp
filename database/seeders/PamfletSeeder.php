<?php

namespace Database\Seeders;

use App\Models\Pamflet;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PamfletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Pamflet::insert([
            [
                'nama' => 'foto1',
                'foto' => 'template_asset/img/fotoSMK1.jpeg',
            ],
            [
                'nama' => 'foto2',
                'foto' => 'template_asset/img/fotoSMK2.jpg',
            ]
        ]);
    }
}