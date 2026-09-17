<?php

namespace App\Controllers;

use Sakuci\Controller;
use Sakuci\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index(Request $request)
    {
        $data= Member::orderBy('id_member', 'desc')
        ->paginate(10);    
        return view('member.index', compact('data'));
    }

    public function create(Request $request)
    {
        return view('member.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'plat_nomor' => 'required|string|max:255',
            'jenis_kendaran' => 'required',
            'warna' => 'required',
            'pemilik' => 'required',
        ]);

        member::create($request->all());

        return redirect()->route('member.index')->with('succes', 'member berhasil ditambahkan.');
    }

    public function edit(Request $request, $id_member)
    {
        $member = member::findOrFail($id_member);
        return view('member.edit', compact('member'));
    }

    public function update(Request $request, $id_member)
    {
        $request->validate([
            'plat_nomor' => 'required|string|max:100',
            'jenis_kendaran' => 'required',
            'warna' => 'required',
            'pemilik' => 'required',
        ]);

        $member = member::findOrFail($id_member);
        $member->update($request->all());

        return redirect()->route('member.index')->with('success', 'member berhasil diperbarui.');
    }

    public function destroy(Request $request, $id_member)
    {
        $member = member::findOrFail($id_member);
        $member->delete();

        return redirect()->route('member.index')->with('success', 'member berhasil dihapus.');
    }
}