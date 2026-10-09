@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <h1 class="text-3xl font-bold mb-6">{{ $judul }}</h1>

    <dl class="bg-white rounded-lg border border-slate-200 divide-y divide-slate-100">
        @foreach ($kontak as $label => $nilai)
            <div class="flex px-4 py-3">
                <dt class="w-32 font-medium text-slate-500">{{ $label }}</dt>
                <dd>{{ $nilai }}</dd>
            </div>
        @endforeach
    </dl>
@endsection
