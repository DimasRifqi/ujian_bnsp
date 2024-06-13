<?php

namespace Database\Seeders;

use App\Models\Misi;
use App\Models\Visi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Visi_MisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Visi::insert([
            [
                'isi' => 'islami, entrepenerurship dan sinergi',
            ],
            [
                'isi' => 'mendapatkan ilmu yang bermanfaat untuk bekal di akhirat nanti',
            ],
        ]);

        Misi::insert([
            [
                'isi' => 'menambahkan dan mengamalkan nilai-nilai al-quran dan as sunah',
            ],
            [
                'isi' => 'meningkatkan kompetensi siswa sesuai dengan bidang keahlian',
            ],
            [
                'isi' => 'menumbuhkan jiwa kewirausahaan yang mampu mengembangkan diri dan pandai melihat peluang pasar',
            ],
            [
                'isi' => 'mengembangkan sistem informasi manajemen sekolah',
            ],
        ]);
    }
}