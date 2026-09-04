<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TbKendaraan;
use App\Models\TbUser;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraans = TbKendaraan::with('user')->orderBy('id_kendaraan', 'desc')->get();
        return view('admin.kendaraan.index', compact('kendaraans'));
    }

    public function create()
    {
        $users = TbUser::all();
        return view('admin.kendaraan.create', compact('users'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'plat_nomor' => 'required|string|max:15',
            'jenis_kendaraan' => 'required|string|max:20',
            'warna' => 'nullable|string|max:20',
            'pemilik' => 'nullable|string|max:100',
            'id_user' => 'required|exists:tb_user,id_user',
        ]);

        TbKendaraan::create($validated);

        return redirect()->route('admin.kendaraan.index')->with('success', 'Kendaraan berhasil ditambahkan.');
    }

    public function edit(TbKendaraan $kendaraan)
    {
        $users = TbUser::all();
        return view('admin.kendaraan.edit', compact('kendaraan', 'users'));
    }

    public function update(Request $request, TbKendaraan $kendaraan)
    {
        $validated = $request->validate([
            'plat_nomor' => 'required|string|max:15',
            'jenis_kendaraan' => 'required|string|max:20',
            'warna' => 'nullable|string|max:20',
            'pemilik' => 'nullable|string|max:100',
            'id_user' => 'required|exists:tb_user,id_user',
        ]);

        $kendaraan->update($validated);

        return redirect()->route('admin.kendaraan.index')->with('success', 'Kendaraan berhasil diperbarui.');
    }

    public function destroy(TbKendaraan $kendaraan)
    {
        $kendaraan->delete();
        return redirect()->route('admin.kendaraan.index')->with('success', 'Kendaraan berhasil dihapus.');
    }
}