@extends('layouts.app')

@section ('content')

<div class="container">
    <h1>Tambah Jenis Kendaraan</h1>
    <form action="{{ route('tarif.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="jenis_kendaraan">Jenis Kendaraan</label>
            <input type="text" name="jenis_kendaraan" id="jenis_kendaraan" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

@endsection