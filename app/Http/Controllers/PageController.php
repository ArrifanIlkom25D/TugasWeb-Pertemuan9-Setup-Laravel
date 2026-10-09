<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function about()
    {
        $teknologi = ['PHP', 'Laravel', 'MySQL', 'Blade', 'Tailwind CSS'];

        return view('about', [
            'judul'     => 'Tentang Project',
            'deskripsi' => 'Project ini dibuat untuk Tugas Rutin 9: Setup Laravel.',
            'teknologi' => $teknologi,
        ]);
    }

    public function contact()
    {
        $kontak = [
            'Nama'  => 'Arrifan Ryansyah',
            'Email' => 'ArrifanIlkom25d@gmail.com',
            'Kota'  => 'Medan',
        ];

        return view('contact', [
            'judul' => 'Kontak',
            'kontak' => $kontak,
        ]);
    }
}
