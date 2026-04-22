@extends('admin.master')

@section('content')
  <div class="container">
    <h1>{{ $zone->name }}</h1>
    <hr>
    <div class="mb-3">
        <img src="{{ asset('storage/images/' . $zone->image) }}" alt="{{ $zone->name }}" width="200">
    </div>
    <p><strong>Deskripsi:</strong> {{ $zone->description }}</p>
    <p><strong>Rentang Harga:</strong> {{ $zone->price_range }}</p>
    <a href="{{ route('zones.index') }}" class="btn btn-secondary">Kembali ke Daftar Zona</a>




@endsection
