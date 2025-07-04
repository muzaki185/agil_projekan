<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Http\Request;

class ResepController extends Controller
{
    public function index()
    {
        $reseps = Resep::all();
        return view('resep.index', compact('reseps'));
    }

    public function create()
    {
        return view('resep.create');
    }

    public function store(Request $request)
    {
        Resep::create($request->all());
        return redirect()->route('resep.index');
    }

    public function edit(Resep $resep)
    {
        return view('resep.edit', compact('resep'));
    }

    public function update(Request $request, Resep $resep)
    {
        $resep->update($request->all());
        return redirect()->route('resep.index');
    }

    public function destroy(Resep $resep)
    {
        $resep->delete();
        return redirect()->route('resep.index');
    }
}
