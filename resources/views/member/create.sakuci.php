@extends('layouts.app')

@section ('content')

<div class="container">
    <h1>Tambah Member</h1>
    <form action="{{ route('member.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="plat_nomor">Plat Nomor</label>
            <input type="text" name="plat_nomor" id="plat_nomor" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="jenis_kendaran">Jenis Kendaraan</label>
            <input type="text" name="jenis_kendaraan" id="jenis_kendaraan" class="form-control" required>
        </div>
         <div class="form-group mb-3">
            <label for="warna">Warna</label>
            <input type="text" name="warna" id="warna" class="form-control" required>
        </div>
         <div class="form-group mb-3">
            <label for="pemilik">pemilik</label>
            <input type="text" name="pemilik" id="pemilik" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

@endsection