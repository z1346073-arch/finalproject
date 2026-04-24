@extends('admin.master')

@section('content')

<div class="container mt-4">
    <div class="card-shadow-sm border-0">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Edit Attraction</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.attractions.update', $attraction->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $attraction->name }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="ticket_price">Ticket Price</label>
                    <input type="number" class="form-control" id="ticket_price" name="ticket_price" value="{{ $attraction->ticket_price }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required>{{ $attraction->description }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="zone_id">Zone</label>
                    <select class="form-control" id="zone_id" name="zone_id" required>
                        <option value="">Select Zone</option>
                        @foreach($zones as $zone)
                            <option value="{{ $zone->id }}" {{ $attraction->zone_id == $zone->id ? 'selected' : '' }}>{{ $zone->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                    @if($attraction->image)
                        <img src="{{ asset('storage/' . $attraction->image) }}" alt="{{ $attraction->name }}" width="150" class="mt-2">
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Update Attraction</button>
            </form>
        </div>
    </div>
</div>

@endsection