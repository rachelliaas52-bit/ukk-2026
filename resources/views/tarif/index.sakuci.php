@extends('layouts.app')

@section('title', config('app.name')  .  ' --kerangka PHP ringan')

@section ('content')

<div class="container">
    <h1>Daftar Tarif</h1>
    <a href="{{ route('tarif.create') }}" class="btn btn-primary mb-3 btn-sm Tambah Jenis Kendaraan">Tambah Kategori</a>

    <table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>id_tarif</th>
            <th>jenis_kendaraan</th>
            <th>tarif_per_jam</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $d)
        <tr>
            <td> {{ $d->id_tarif }} </td>
            <td> {{ $d->jenis_kendaraan }} </td>
            <td> {{ $d->tarif_per_jam }} </td>
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