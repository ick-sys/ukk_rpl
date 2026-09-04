@extends('layouts.admin')

@section('content')
<h1 class="text-2xl font-bold mb-6">Edit Area Parkir</h1>

<form action="{{ route('admin.area.update', $area->id_area) }}" method="POST" class="bg-white rounded-xl shadow p-6 max-w-lg space-y-4">
    @csrf @method('PUT')
    <div>
        <label class="block text-sm font-medium mb-1">Nama Area</label>
        <input type="text" name="nama_area" value="{{ old('nama_area', $area->nama_area) }}" class="w-full border rounded-lg px-3 py-2">
    </div>
    <div>
        <label class="block text-sm font-medium mb-1">Kapasitas</label>
        <input type="number" name="kapasitas" value="{{ old('kapasitas', $area->kapasitas) }}" class="w-full border rounded-lg px-3 py-2">
    </div>
    <div>
        <label class="block text-sm font-medium mb-1">Terisi</label>
        <input type="number" name="terisi" value="{{ old('terisi', $area->terisi) }}" class="w-full border rounded-lg px-3 py-2">
    </div>
    <div class="flex gap-2 pt-2">
        <button type="submit" class="bg-gold-500 hover:bg-gold-400 text-ink-900 font-semibold px-4 py-2 rounded-lg">Update</button>
        <a href="{{ route('admin.area.index') }}" class="px-4 py-2 rounded-lg border">Batal</a>
    </div>
</form>
@endsection