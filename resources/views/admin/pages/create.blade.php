@extends('admin.master')

@section('content')
    <h1>Create Zone</h1>
    <form action="{{ route('admin.zones.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>
        <div class="form-group">
            <label for="zone_id">Zone ID</label>
            <input type="number" class="form-control" id="zone_id" name="zone_id" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection