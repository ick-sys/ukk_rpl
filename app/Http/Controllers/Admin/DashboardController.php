<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TbTransaksi;
use App\Models\TbAreaParkir;
use App\Models\TbKendaraan;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $today = now()->toDateString();

        $kendaraanMasukHariIni = TbTransaksi::whereDate('waktu_masuk', $today)->count();
        $transaksiHariIni = TbTransaksi::whereDate('waktu_masuk', $today)->where('status', 'keluar')->count();
        $pendapatanHariIni = TbTransaksi::whereDate('waktu_masuk', $today)
            ->where('status', 'keluar')
            ->sum('biaya_total');

        $totalKapasitas = TbAreaParkir::sum('kapasitas');
        $totalTerisi = TbAreaParkir::sum('terisi');
        $slotTersedia = $totalKapasitas - $totalTerisi;

        $areaParkir = TbAreaParkir::all();

        $transaksiTerbaru = TbTransaksi::with(['kendaraan', 'area'])
            ->orderBy('waktu_masuk', 'desc')
            ->limit(10)
            ->get();

        return view('admin.dashboard', compact(
            'kendaraanMasukHariIni',
            'transaksiHariIni',
            'pendapatanHariIni',
            'totalKapasitas',
            'totalTerisi',
            'slotTersedia',
            'areaParkir',
            'transaksiTerbaru'
        ));
    }
}