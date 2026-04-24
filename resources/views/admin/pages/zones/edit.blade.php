@extends('admin.master')

@section('content')
  
<h1>Edit Zona</h1>
<hr>
<form action="{{ route('admin.zones.update', $zone->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    
    <div class="mb-3">
        <label for="name" class="form-label">Nama Zona</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $zone->name }}" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="description" name="description" rows="3" required>{{ $zone->description }}</textarea>
    </div>
    <div class="mb-3">
        <label for="price_range" class="form-label">Rentang Harga</label>
        <input type="text" class="form-control" id="price_range" name="price_range" value="{{ $zone->price_range }}" required>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Gambar</label>
        <input type="file" class="form-control" id="image" name="image">
        @if($zone->image)
            <img src="{{ asset('storage/images/' . $zone->image) }}" alt="{{ $zone->name }}" width="100" class="mt-2">
        @endif
    </div>
    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
</form>

@endsection
