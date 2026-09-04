@extends('layouts.admin')

@section('content')
<h1 class="text-2xl font-bold mb-6">Tambah Tarif</h1>

<form action="{{ route('admin.tarif.store') }}" method="POST" class="bg-white rounded-xl shadow p-6 max-w-lg space-y-4">
    @csrf
    <div>
        <label class="block text-sm font-medium mb-1">Jenis Kendaraan</label>
        <select name="jenis_kendaraan" class="w-full border rounded-lg px-3 py-2">
            <option value="motor">Motor</option>
            <option value="mobil">Mobil</option>
            <option value="lainnya">Lainnya</option>
        </select>
        @error('jenis_kendaraan') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
    </div>
    <div>
        <label class="block text-sm font-medium mb-1">Tarif per Jam (Rp)</label>
        <input type="number" name="tarif_per_jam" value="{{ old('tarif_per_jam') }}" class="w-full border rounded-lg px-3 py-2">
        @error('tarif_per_jam') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
    </div>
    <div class="flex gap-2 pt-2">
        <button type="submit" class="bg-gold-500 hover:bg-gold-400 text-ink-900 font-semibold px-4 py-2 rounded-lg">Simpan</button>
        <a href="{{ route('admin.tarif.index') }}" class="px-4 py-2 rounded-lg border">Batal</a>
    </div>
</form>
@endsection