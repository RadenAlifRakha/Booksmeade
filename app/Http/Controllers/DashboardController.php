<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Peminjaman;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        // dd('ada');
        $jumlahBuku = Buku::count();
        $kategori = Kategori::count();
        $peminjaman = Peminjaman::count();
        $user = User::where('role', 'user')->count();

        return view('admin.dashboard', compact('jumlahBuku', 'kategori', 'peminjaman', 'user'));
    }
}