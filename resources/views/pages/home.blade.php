@extends('layout.app')

@section('content')
<div class="container">
    <h1 class="text-center my-4">Video Games Library</h1>

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Platform</th>
                    <th scope="col">Price</th>
                    <th scope="col">Publisher</th>
                    <th scope="col">Release Date</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($videogames as $videogame)
                <tr>
                    <td>{{ $videogame->title }}</td>
                    <td>{{ $videogame->genre }}</td>
                    <td>{{ $videogame->platform }}</td>
                    <td>${{ number_format($videogame->price, 2) }}</td>
                    <td>{{ $videogame->publisher }}</td>
                    <td>{{ \Carbon\Carbon::parse($videogame->release_date)->format('d/m/Y') }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a href="{{ route('videogames.show', $videogame->id) }}" class="btn btn-primary btn-sm">View</a>
                            <a href="{{ route('videogames.edit', $videogame->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('videogames.destroy', $videogame->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="text-end mt-3">
        <a href="{{ route('videogames.create') }}" class="btn btn-success">Add New Game</a>
    </div>
</div>
@endsection
