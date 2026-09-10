@extends('layouts.app')

@section ('content')

<h1>Edit kategori</h1>
<form action="{{ route('tarif.update', ['id_tarif' => $tarif->id_tarif]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group mb-3">
        <label for="jenis_kendaraan">jenis kendaraan</label>
        <input type="text" class="form-control" id="jenis_kendaraan" name="jenis_kendaraan" value="{{ $tarif->jenis_kendaraan }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection 