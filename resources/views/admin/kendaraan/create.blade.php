@extends('layouts.admin')

@section('content')
<h1 class="text-2xl font-bold mb-6">Tambah Kendaraan</h1>

<form action="{{ route('admin.kendaraan.store') }}" method="POST" class="bg-white rounded-xl shadow p-6 max-w-lg space-y-4">
    @csrf
    <div>
        <label class="block text-sm font-medium mb-1">Plat Nomor</label>
        <input type="text" name="plat_nomor" value="{{ old('plat_nomor') }}" class="w-full border rounded-lg px-3 py-2 uppercase">
        @error('plat_nomor') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
    </div>
    <div>
        <label class="block text-sm font-medium mb-1">Jenis Kendaraan</label>
        <input type="text" name="jenis_kendaraan" placeholder="motor / mobil" value="{{ old('jenis_kendaraan') }}" class="w-full border rounded-lg px-3 py-2">
        @error('jenis_kendaraan') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
    </div>
    <div>
        <label class="block text-sm font-medium mb-1">Warna</label>
        <input type="text" name="warna" value="{{ old('warna') }}" class="w-full border rounded-lg px-3 py-2">
    </div>
    <div>
        <label class="block text-sm font-medium mb-1">Pemilik</label>
        <input type="text" name="pemilik" value="{{ old('pemilik') }}" class="w-full border rounded-lg px-3 py-2">
    </div>
    <div>
        <label class="block text-sm font-medium mb-1">Terdaftar Oleh (User)</label>
        <select name="id_user" class="w-full border rounded-lg px-3 py-2">
            @foreach($users as $u)
                <option value="{{ $u->id_user }}">{{ $u->nama_lengkap }} ({{ $u->role }})</option>
            @endforeach
        </select>
        @error('id_user') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
    </div>
    <div class="flex gap-2 pt-2">
        <button type="submit" class="bg-gold-500 hover:bg-gold-400 text-ink-900 font-semibold px-4 py-2 rounded-lg">Simpan</button>
        <a href="{{ route('admin.kendaraan.index') }}" class="px-4 py-2 rounded-lg border">Batal</a>
    </div>
</form>
@endsection