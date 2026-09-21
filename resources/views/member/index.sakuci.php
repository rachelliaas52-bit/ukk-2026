@extends('layouts.app')

@section('title', config('app.name')  .  ' --kerangka PHP ringan')

@section ('content')

<div class="container">
    <h1>Daftar Member</h1>
    <a href="{{ route('tarif.create') }}" class="btn btn-primary mb-3 btn-sm Tambah Jenis Kendaraan">Tambah Member</a>

    <table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>nomor</th>
            <th>plat nomor</th>
            <th>jenis kendaraan</th>
            <th>warna</th>
            <th>pemilik</th>
            <th>id user</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $d)
        <tr>
            <td> {{ $d->id_member }} </td>
            <td> {{ $d->plat_nomor }} </td>
            <td> {{ $d->jenis_kendaraan }} </td>
            <td> {{ $d->warna }} </td>
            <td> {{ $d->pemilik }} </td>
            <td> {{ $d->id_user }} </td>
            <td><a href="{{ route('tarif.edit', ['id_tarif' => $d->id_tarif]) }}" class="btn btn-sm btn-success">Edit</a>
            <form action="{{ route('tarif.destroy', ['id_tarif' => $d->id_tarif]) }}" method="POST" class="d-inline" onsubmit="return confirm('apakah benar akan dihapus?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
            </form>
        </td>
        </tr>
        @endforeach
    </tbody>
</table>

{!! $data->links() !!}

@endsection