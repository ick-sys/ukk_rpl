<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dokumen;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'totalDokumen' => 0,
            'totalGaleri' => 0,
            'totalVideo' => 0,
            'totalPengunjung' => 0,
        ]);
    }
}