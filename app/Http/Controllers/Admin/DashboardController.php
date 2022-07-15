<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JenisLaporan;
use App\Models\Pengaduan;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $categories = JenisLaporan::all()->count();
        $laporan = Pengaduan::count();
        $user = User::count();

        return view('admin.dashboard.index')
            ->with('categories', $categories)
            ->with('laporan', $laporan)
            ->with('user', $user);
    }
}
