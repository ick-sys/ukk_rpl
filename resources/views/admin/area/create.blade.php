@extends('layouts.admin')

@section('content')
<h1 class="text-2xl font-bold mb-6">Tambah Area Parkir</h1>

<form action="{{ route('admin.area.store') }}" method="POST" class="bg-white rounded-xl shadow p-6 max-w-lg space-y-4">
    @csrf
    <div>
        <label class="block text-sm font-medium mb-1">Nama Area</label>
        <input type="text" name="nama_area" value="{{ old('nama_area') }}" class="w-full border rounded-lg px-3 py-2">
        @error('nama_area') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
    </div>
    <div>
        <label class="block text-sm font-medium mb-1">Kapasitas</label>
        <input type="number" name="kapasitas" value="{{ old('kapasitas') }}" class="w-full border rounded-lg px-3 py-2">
        @error('kapasitas') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
    </div>
    <div class="flex gap-2 pt-2">
        <button type="submit" class="bg-gold-500 hover:bg-gold-400 text-ink-900 font-semibold px-4 py-2 rounded-lg">Simpan</button>
        <a href="{{ route('admin.area.index') }}" class="px-4 py-2 rounded-lg border">Batal</a>
    </div>
</form>
@endsection