<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TbAreaParkir;
use Illuminate\Http\Request;

class AreaParkirController extends Controller
{
    public function index()
    {
        $areas = TbAreaParkir::orderBy('id_area', 'desc')->get();
        return view('admin.area.index', compact('areas'));
    }

    public function create()
    {
        return view('admin.area.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_area' => 'required|string|max:50',
            'kapasitas' => 'required|integer|min:1',
        ]);

        $validated['terisi'] = 0;

        TbAreaParkir::create($validated);

        return redirect()->route('admin.area.index')->with('success', 'Area parkir berhasil ditambahkan.');
    }

    public function edit(TbAreaParkir $area)
    {
        return view('admin.area.edit', compact('area'));
    }

    public function update(Request $request, TbAreaParkir $area)
    {
        $validated = $request->validate([
            'nama_area' => 'required|string|max:50',
            'kapasitas' => 'required|integer|min:1',
            'terisi' => 'required|integer|min:0',
        ]);

        $area->update($validated);

        return redirect()->route('admin.area.index')->with('success', 'Area parkir berhasil diperbarui.');
    }

    public function destroy(TbAreaParkir $area)
    {
        $area->delete();
        return redirect()->route('admin.area.index')->with('success', 'Area parkir berhasil dihapus.');
    }
}