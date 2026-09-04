@extends('layouts.admin')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold">Data Kendaraan</h1>
    <a href="{{ route('admin.kendaraan.create') }}" class="bg-gold-500 hover:bg-gold-400 text-ink-900 font-semibold px-4 py-2 rounded-lg">+ Tambah Kendaraan</a>
</div>

@if(session('success'))
    <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">{{ session('success') }}</div>
@endif

<div class="bg-white rounded-xl shadow overflow-hidden">
    <table class="w-full text-sm">
        <thead class="bg-gray-50 text-left">
            <tr>
                <th class="px-4 py-3">Plat Nomor</th>
                <th class="px-4 py-3">Jenis</th>
                <th class="px-4 py-3">Warna</th>
                <th class="px-4 py-3">Pemilik</th>
                <th class="px-4 py-3">Terdaftar Oleh</th>
                <th class="px-4 py-3 text-right">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kendaraans as $k)
            <tr class="border-t">
                <td class="px-4 py-3 font-semibold">{{ $k->plat_nomor }}</td>
                <td class="px-4 py-3 capitalize">{{ $k->jenis_kendaraan }}</td>
                <td class="px-4 py-3">{{ $k->warna ?? '-' }}</td>
                <td class="px-4 py-3">{{ $k->pemilik ?? '-' }}</td>
                <td class="px-4 py-3">{{ $k->user->nama_lengkap ?? '-' }}</td>
                <td class="px-4 py-3 text-right space-x-2">
                    <a href="{{ route('admin.kendaraan.edit', $k->id_kendaraan) }}" class="text-blue-600 hover:underline">Edit</a>
                    <form action="{{ route('admin.kendaraan.destroy', $k->id_kendaraan) }}" method="POST" class="inline" onsubmit="return confirm('Hapus kendaraan ini?')">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection