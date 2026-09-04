@extends('layouts.admin')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold">Tarif Parkir</h1>
    <a href="{{ route('admin.tarif.create') }}" class="bg-gold-500 hover:bg-gold-400 text-ink-900 font-semibold px-4 py-2 rounded-lg">+ Tambah Tarif</a>
</div>

@if(session('success'))
    <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">{{ session('success') }}</div>
@endif

<div class="bg-white rounded-xl shadow overflow-hidden">
    <table class="w-full text-sm">
        <thead class="bg-gray-50 text-left">
            <tr>
                <th class="px-4 py-3">Jenis Kendaraan</th>
                <th class="px-4 py-3">Tarif / Jam</th>
                <th class="px-4 py-3 text-right">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tarifs as $tarif)
            <tr class="border-t">
                <td class="px-4 py-3 capitalize">{{ $tarif->jenis_kendaraan }}</td>
                <td class="px-4 py-3">Rp {{ number_format($tarif->tarif_per_jam, 0, ',', '.') }}</td>
                <td class="px-4 py-3 text-right space-x-2">
                    <a href="{{ route('admin.tarif.edit', $tarif->id_tarif) }}" class="text-blue-600 hover:underline">Edit</a>
                    <form action="{{ route('admin.tarif.destroy', $tarif->id_tarif) }}" method="POST" class="inline" onsubmit="return confirm('Hapus tarif ini?')">
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