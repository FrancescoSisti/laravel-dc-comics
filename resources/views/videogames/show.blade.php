@extends('layout.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>{{ $videogame->title }}</h1>
        </div>
        <div class="card-body">
            @if($videogame->cover_image)
                <img src="{{ $videogame->cover_image }}" alt="{{ $videogame->title }}" class="img-fluid mb-3">
            @endif

            <div class="row">
                <div class="col-md-6">
                    <p><strong>Publisher:</strong> {{ $videogame->publisher }}</p>
                    <p><strong>Developer:</strong> {{ $videogame->developer }}</p>
                    <p><strong>Release Date:</strong> {{ $videogame->release_date }}</p>
                    <p><strong>Genre:</strong> {{ $videogame->genre }}</p>
                    <p><strong>Platform:</strong> {{ $videogame->platform }}</p>
                    <p><strong>Price:</strong> ${{ $videogame->price }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Rating:</strong> {{ $videogame->rating ?? 'N/A' }}</p>
                    <p><strong>Multiplayer:</strong> {{ $videogame->multiplayer ? 'Yes' : 'No' }}</p>
                    <p><strong>Max Players:</strong> {{ $videogame->max_players ?? 'N/A' }}</p>
                    <p><strong>Language:</strong> {{ $videogame->language }}</p>
                    <p><strong>Age Rating:</strong> {{ $videogame->age_rating }}</p>
                    <p><strong>Storage Required:</strong>
                        @if($videogame->storage_required >= 1000)
                            {{ number_format($videogame->storage_required / 1000, 2) }} GB
                        @else
                            {{ $videogame->storage_required }} MB
                        @endif
                    </p>
                </div>
            </div>

            <div class="mt-3">
                <h3>Description</h3>
                <p>{{ $videogame->description ?? 'No description available.' }}</p>
            </div>

            <div class="mt-4">
                <a href="{{ route('videogames.edit', $videogame->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('videogames.destroy', $videogame->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this game?')">Delete</button>
                </form>
                <a href="{{ route('videogames.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>
</div>
@endsection
