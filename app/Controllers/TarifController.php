<?php

namespace App\Controllers;

use Sakuci\Controller;
use Sakuci\Http\Request;
use App\Models\Tarif;

class TarifController extends Controller
{
    public function index(Request $request)
    {
        $data= Tarif::orderBy('id_tarif', 'desc')
        ->paginate(10);    
        return view('tarif.index', compact('data'));
    }

    public function create(Request $request)
    {
        return view('tarif.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_kendaraan' => 'required|string|max:255',
        ]);

        tarif::create([
            'jenis_kendaraan' => $request->input('jenis_kendaraan'),
            'tarif_per_jam' => $request->input('tarif_per_jam'),
        ]);

        return redirect()->route('tarif.index')->with('succes', 'jenis kendaraan berhasil ditambahkan.');
    }

    public function edit(Request $request, $id_tarif)
    {
        $tarif = tarif::findOrFail($id_tarif);
        return view('tarif.edit', compact('tarif'));
    }

    public function update(Request $request, $id_tarif)
    {
        $request->validate([
            'jenis_kendaraan' => 'required|string|max:100',
        ]);

        $tarif = tarif::findOrFail($id_tarif);
        $tarif->update([
            'jenis_kendaraan'=> $request->jenis_kendaraan
        ]);

        return redirect()->route('tarif.index')->with('success', 'jenis kendaraan berhasil diperbarui.');
    }

    public function destroy(Request $request, $id_tarif)
    {
        $tarif = tarif::findOrFail($id_tarif);
        $tarif->delete();

        return redirect()->route('tarif.index')->with('success', 'jenis kendaraan berhasil dihapus.');
    }
}