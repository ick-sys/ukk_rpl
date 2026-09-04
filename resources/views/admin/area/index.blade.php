@extends('layouts.admin')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold">Area Parkir</h1>
    <a href="{{ route('admin.area.create') }}" class="bg-gold-500 hover:bg-gold-400 text-ink-900 font-semibold px-4 py-2 rounded-lg">+ Tambah Area</a>
</div>

@if(session('success'))
    <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">{{ session('success') }}</div>
@endif

<div class="bg-white rounded-xl shadow overflow-hidden">
    <table class="w-full text-sm">
        <thead class="bg-gray-50 text-left">
            <tr>
                <th class="px-4 py-3">Nama Area</th>
                <th class="px-4 py-3">Kapasitas</th>
                <th class="px-4 py-3">Terisi</th>
                <th class="px-4 py-3 text-right">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($areas as $area)
            <tr class="border-t">
                <td class="px-4 py-3">{{ $area->nama_area }}</td>
                <td class="px-4 py-3">{{ $area->kapasitas }}</td>
                <td class="px-4 py-3">{{ $area->terisi }}</td>
                <td class="px-4 py-3 text-right space-x-2">
                    <a href="{{ route('admin.area.edit', $area->id_area) }}" class="text-blue-600 hover:underline">Edit</a>
                    <form action="{{ route('admin.area.destroy', $area->id_area) }}" method="POST" class="inline" onsubmit="return confirm('Hapus area ini?')">
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