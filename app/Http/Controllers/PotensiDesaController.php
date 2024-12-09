<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PotensiDesaController extends Controller
{
    public function index()
    {
        // Data dummy potensi desa
        $potensi = [
            'sumber_daya_alam' => [
                'pertanian' => 'Desa kami memiliki lahan subur untuk pertanian padi, jagung, dan sayuran.',
                'pertambangan' => 'Terdapat potensi tambang pasir dan batu alam di daerah ini.',
            ],
            'budaya' => [
                'tradisi_lokal' => 'Desa kami memiliki tradisi upacara adat yang diwariskan turun-temurun.',
                'kerajinan_tangan' => 'Pengrajin desa menghasilkan anyaman bambu dan kain tenun yang memiliki nilai seni tinggi.',
            ],
            'ekonomi' => [
                'industri_kecil' => 'Industri makanan olahan dan kerajinan tangan berkembang pesat di desa ini.',
            ],
            'infrastruktur' => [
                'akses_transportasi' => 'Desa ini dapat diakses dengan jalan raya yang baik menuju kota terdekat.',
                'pendidikan_kesehatan' => 'Tersedia sekolah dasar dan puskesmas yang melayani kebutuhan masyarakat.',
            ]
        ];

        // Mengirimkan data ke view
        return view('potensidesa.index', compact('potensi'));
    }
}
