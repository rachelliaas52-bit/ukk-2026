@extends('layouts.app')

@section ('content')

<h1>Edit Member</h1>
<form action="{{ route('member.update', ['id_member' => $member->id_member]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group mb-3">
        <label for="plat_nomor">Plat Nomor</label>
        <input type="text" class="form-control" id="plat_nomor" name="plat_nomor" value="{{ $member->jenis_kendaraan }}" required>
    </div>
    <div class="form-group mb-3">
        <label for="jenis_kendaraan">Jenis Kendaraan</label>
        <input type="text" class="form-control" id="jenis_kendaraan" name="jenis_kendaraan" value="{{ $member->jenis_kendaraan }}" required>
    </div>
    <div class="form-group mb-3">
        <label for="warna">Warna</label>
        <input type="text" class="form-control" id="warna" name="warna" value="{{ $member->warna }}" required>
    </div>
    <div class="form-group mb-3">
        <label for="pemilik">Pemilik</label>
        <input type="text" class="form-control" id="pemilik" name="pemilik" value="{{ $member->pemilik }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection 