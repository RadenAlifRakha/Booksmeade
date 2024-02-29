<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggota = User::where('role', 'user')->get();
        return view('admin.anggota', compact('anggota'));
    }

    public function riwayatPeminjaman()
    {
        $riwayatPeminjaman = Peminjaman::all()->groupBy('users_id');
        $riwayatPeminjaman->transform(function ($peminjaman) {
            return $peminjaman->count();
        });

        $users = User::whereIn('id', $riwayatPeminjaman->keys())->get();

        return view('admin.anggota', compact('riwayatPeminjaman', 'users'));
    }
}
