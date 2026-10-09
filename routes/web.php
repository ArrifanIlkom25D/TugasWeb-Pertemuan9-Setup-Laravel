<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// 1. Route "/" -> data array dikirim langsung dari route ke view (data dinamis)
Route::get('/', function () {
    $mahasiswa = [
        ['nama' => 'Andi Pratama', 'nim' => '2401001', 'jurusan' => 'Teknik Informatika'],
        ['nama' => 'Siti Aisyah',  'nim' => '2401002', 'jurusan' => 'Sistem Informasi'],
        ['nama' => 'Budi Santoso', 'nim' => '2401003', 'jurusan' => 'Teknik Informatika'],
    ];

    return view('home', [
        'judul'     => 'Selamat Datang di Laravel',
        'mahasiswa' => $mahasiswa,
    ]);
});

// 2. Route "/about" -> lewat Controller (hasil php artisan make:controller PageController)
Route::get('/about', [PageController::class, 'about']);

// 3. Route "/contact" -> lewat Controller
Route::get('/contact', [PageController::class, 'contact']);

// BONUS: route dengan parameter
Route::get('/hello/{nama}', function (string $nama) {
    return view('hello', ['nama' => $nama]);
});
