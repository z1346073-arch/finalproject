@extends('admin.master')

@section('content')
    <h1>Attractions List</h1>
    <a href="{{ route('admin.attractions.create') }}" class="btn btn-primary mb-3">Add New Attraction</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Zone ID</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($attractions as $attraction)
                <tr>
                    <td>{{ $attraction->id }}</td>
                    <td>{{ $attraction->name }}</td>
                    <td>{{ $attraction->description }}</td>
                    <td>{{ $attraction->zone_id }}</td>
                    <td>
                        <a href="{{ route('admin.attractions.edit', $attraction->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{ route('admin.attractions.show', $attraction->id) }}" class="btn btn-sm btn-info">View</a>
                        <form action="{{ route('admin.attractions.destroy', $attraction->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this attraction?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection