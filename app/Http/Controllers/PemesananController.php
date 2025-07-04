<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index()
    {
        $pemesanans = Pemesanan::all();
        return view('pemesanan.index', compact('pemesanans'));
    }

    public function create()
    {
        return view('pemesanan.create');
    }

    public function store(Request $request)
    {
        Pemesanan::create($request->all());
        return redirect()->route('pemesanan.index');
    }

    public function edit(Pemesanan $pemesanan)
    {
        return view('pemesanan.edit', compact('pemesanan'));
    }

    public function update(Request $request, Pemesanan $pemesanan)
    {
        $pemesanan->update($request->all());
        return redirect()->route('pemesanan.index');
    }

    public function destroy(Pemesanan $pemesanan)
    {
        $pemesanan->delete();
        return redirect()->route('pemesanan.index');
    }
}
