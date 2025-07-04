<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanController extends Controller
{
    public function index()
    {
        $laporans = DB::table('transaksis')
            ->select('tanggal_transaksi as tanggal', 'nama_obat', DB::raw("'Transaksi' as jenis"), 'jumlah')
            ->unionAll(
                DB::table('pemesanans')
                    ->select('tanggal_pesan as tanggal', 'nama_obat', DB::raw("'Pemesanan' as jenis"), 'jumlah')
            )
            ->orderBy('tanggal', 'desc')
            ->get();

        return view('laporan.index', compact('laporans'));
    }

    public function cetak()
    {
        $laporans = DB::table('transaksis')
            ->select('tanggal_transaksi as tanggal', 'nama_obat', DB::raw("'Transaksi' as jenis"), 'jumlah')
            ->unionAll(
                DB::table('pemesanans')
                    ->select('tanggal_pesan as tanggal', 'nama_obat', DB::raw("'Pemesanan' as jenis"), 'jumlah')
            )
            ->orderBy('tanggal', 'desc')
            ->get();

        $pdf = Pdf::loadView('laporan.pdf', compact('laporans'));
        return $pdf->stream('laporan-apotek.pdf');
    }
}
