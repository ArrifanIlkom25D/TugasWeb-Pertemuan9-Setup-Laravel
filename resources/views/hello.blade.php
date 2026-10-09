@extends('layouts.app')

@section('title', 'Hello')

@section('content')
    <h1 class="text-4xl font-bold">Halo, {{ $nama }}! 👋</h1>
    <p class="mt-3 text-slate-600">Ganti nama di URL: <code class="bg-slate-200 px-1 rounded">/hello/NamaKamu</code></p>
@endsection
