@extends('admin.master')

@section('content')
    <div class="container">
        <h1>Create New Attraction</h1>
        <hr>
        <form action="{{ route('admin.attractions.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="ticket_price" class="form-label">Ticket Price</label>
                <input type="number" class="form-control" id="ticket_price" name="ticket_price" value="{{ old('ticket_price') }}" required>
                @error('ticket_price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description') }}</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="zone_id" class="form-label">Zone</label>
                <select class="form-control" id="zone_id" name="zone_id" required>
                    <option value="">Select Zone</option>
                    @foreach($zones as $zone)
                        <option value="{{ $zone->id }}" {{ old('zone_id') == $zone->id ? 'selected' : '' }}>{{ $zone->name }}</option>
                    @endforeach
                </select>
                @error('zone_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Create Attraction</button>
            <a href="{{ route('admin.attractions.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
