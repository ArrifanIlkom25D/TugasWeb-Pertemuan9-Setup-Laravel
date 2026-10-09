@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1 class="text-3xl font-bold mb-2">{{ $judul }}</h1>
    <p class="text-slate-600 mb-8">Data di bawah ini dikirim dari route berupa array.</p>

    <div class="overflow-hidden rounded-lg border border-slate-200 bg-white">
        <table class="w-full text-left">
            <thead class="bg-slate-100 text-sm">
                <tr>
                    <th class="px-4 py-2">No</th>
                    <th class="px-4 py-2">Nama</th>
                    <th class="px-4 py-2">NIM</th>
                    <th class="px-4 py-2">Jurusan</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($mahasiswa as $m)
                    <tr class="border-t border-slate-100">
                        <td class="px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="px-4 py-2">{{ $m['nama'] }}</td>
                        <td class="px-4 py-2">{{ $m['nim'] }}</td>
                        <td class="px-4 py-2">{{ $m['jurusan'] }}</td>
                    </tr>
                @empty
                    <tr><td colspan="4" class="px-4 py-4 text-center">Belum ada data.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
