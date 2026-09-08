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
        ]);

        return redirect()->route('tarif.index')->with('succes', 'jenis kendaraan berhasil ditambahkan.');
    }
}