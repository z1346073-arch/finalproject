@extends('admin.master')

@section('content')
   
<div class="container">
    <h1>{{ $attraction->name }}</h1>
    <hr>
    <div class="mb-3">
      
    </div>
    <div class="mb-3">
        <img src="{{ asset('storage/' . $attraction->image) }}" alt="{{ $attraction->name }}" width="200">


      
    </div>
    <p><strong>Deskripsi:</strong> {{ $attraction->description }}</p>
    <p><strong>Zona:</strong> {{ $attraction->zone->name }}</p>
    <a href="{{ route('admin.attractions.index') }}" class="btn btn-secondary">Kembali ke Daftar Atraksi</a>
</div>
@endsection