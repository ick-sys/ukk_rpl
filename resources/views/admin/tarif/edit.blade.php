@extends('layouts.admin')

@section('content')
<h1 class="text-2xl font-bold mb-6">Edit Tarif</h1>

<form action="{{ route('admin.tarif.update', $tarif->id_tarif) }}" method="POST" class="bg-white rounded-xl shadow p-6 max-w-lg space-y-4">
    @csrf @method('PUT')
    <div>
        <label class="block text-sm font-medium mb-1">Jenis Kendaraan</label>
        <select name="jenis_kendaraan" class="w-full border rounded-lg px-3 py-2">
            <option value="motor" @selected($tarif->jenis_kendaraan === 'motor')>Motor</option>
            <option value="mobil" @selected($tarif->jenis_kendaraan === 'mobil')>Mobil</option>
            <option value="lainnya" @selected($tarif->jenis_kendaraan === 'lainnya')>Lainnya</option>
        </select>
    </div>
    <div>
        <label class="block text-sm font-medium mb-1">Tarif per Jam (Rp)</label>
        <input type="number" name="tarif_per_jam" value="{{ old('tarif_per_jam', $tarif->tarif_per_jam) }}" class="w-full border rounded-lg px-3 py-2">
    </div>
    <div class="flex gap-2 pt-2">
        <button type="submit" class="bg-gold-500 hover:bg-gold-400 text-ink-900 font-semibold px-4 py-2 rounded-lg">Update</button>
        <a href="{{ route('admin.tarif.index') }}" class="px-4 py-2 rounded-lg border">Batal</a>
    </div>
</form>
@endsection