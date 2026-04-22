@extends('admin.master')

@section('content')

<h1 class="mb-3 h2">Blank</h1>

<section class="mb-3">
    <div class="card">
        <div class="section-title text-center wow zoomIn">
            <h2>Dashboard</h2>
        </div></div>
        <div class="row">
            <p>Welcome to the admin dashboard!</p>
            @forelse($zones as $zone)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $value->name }}</h5>
                            <p class="card-text">{{ $value->description }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <p>No zones found.</p>
            @endforelse
        </div>
    </div>
</section>

@endsection
