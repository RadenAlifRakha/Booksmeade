<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Buku;
use App\Models\Koleksi;
use App\Models\User;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjaman = Peminjaman::all();
        $peminjaman = Peminjaman::orderBy('created_at', 'desc')->get();
        $buku = Buku::all();
        return view('admin.peminjaman', compact('peminjaman'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'buku_id' => 'required|exists:buku,id',
        ]);

        $buku = Buku::find($request->buku_id);
        $tanggalPengembalian = now()->addDays(7);

        Peminjaman::create([
            'buku_id' => $request->buku_id,
            'users_id' => Auth::user()->id,
            'tgl_peminjaman' => now(),
            'tgl_pengembalian' => $tanggalPengembalian,
            'status_peminjaman' => 'N'
        ]);

        $buku->stok = $buku->stok - 1;
        $buku->save();

        Koleksi::create([
            'buku_id' => $request->buku_id,
            'users_id' => Auth::user()->id,
        ]);

        return redirect()->route('koleksi.index')->with(['success' => 'Buku berhasil ditambahkan']);
    }

    public function update($id)
    {
        $peminjaman = Peminjaman::find($id);
        $peminjaman->tgl_pengembalian = now();
        $peminjaman->update(['status_peminjaman' => 'Y']);

        $buku = Buku::find($peminjaman->buku_id);
        $buku->stok = $buku->stok + 1;
        $buku->save();

        return redirect()->route('peminjaman.index');
    }

    public function destroy($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->delete();

        return redirect()->route('peminjaman.index');
    }

    public function peminjamanPDF()
    {
        $peminjaman = Peminjaman::all();
        $pdf = PDF::loadView('admin.pdf.peminjaman', compact('peminjaman'));
        return $pdf->stream('Data Peminjaman Buku ' . now()->format('d-m-Y'));
    }

    
}
