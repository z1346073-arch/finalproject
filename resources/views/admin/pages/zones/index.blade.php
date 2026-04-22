@extends('admin.master')

@section('content')

<h1>Daftar Zona</h1>

<a href="{{ route('zones.create') }}" class="btn btn-primary mb-3">Tambah Zona</a>
<hr>

<form action="{{ route('zones.index') }}" method="GET" class="mb-3">
    <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Cari zona..." value="{{ request('search') }}">
        <button class="btn btn-outline-secondary" type="submit">Cari</button>
    </div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Zona</th>
            <th>Deskripsi</th>
            <th>Rentang Harga</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($zones as $zone)
        <tr>
            <td>{{ $zone->id }}</td>
            <td>{{ $zone->name }}</td>
            <td>{{ $zone->description }}</td>
            <td>{{ $zone->price_range }}</td>
            <td><img src="{{ asset('storage/images/' . $zone->image) }}" alt="{{ $zone->name }}" width="100"></td>
            <td>
                <a href="{{ route('zones.show', $zone->id) }}" class="btn btn-info btn-sm">Lihat</a>
                <a href="{{ route('zones.edit', $zone->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('zones.destroy', $zone->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus zona ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6" class="text-center">Tidak ada data zona</td>
        </tr>
        @endforelse
    </tbody>
</table>


  
@endsection
