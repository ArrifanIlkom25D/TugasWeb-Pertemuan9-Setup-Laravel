@extends('layouts.app')

@section('title', 'About')

@section('content')
    <h1 class="text-3xl font-bold mb-2">{{ $judul }}</h1>
    <p class="text-slate-600 mb-6">{{ $deskripsi }}</p>

    <h2 class="font-semibold mb-2">Teknologi yang dipakai</h2>
    <ul class="list-disc pl-6 space-y-1">
        @foreach ($teknologi as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
@endsection
