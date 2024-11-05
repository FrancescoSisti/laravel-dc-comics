@extends('layout.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Videogames</h1>
            <a href="{{ route('videogames.create') }}" class="btn btn-primary">Add New Game</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            @foreach($videogames as $videogame)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        @if($videogame->cover_image)
                            <img src="{{ $videogame->cover_image }}" class="card-img-top" alt="{{ $videogame->title }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $videogame->title }}</h5>
                            <p class="card-text">
                                <strong>Genre:</strong> {{ $videogame->genre }}<br>
                                <strong>Platform:</strong> {{ $videogame->platform }}<br>
                                <strong>Price:</strong> ${{ $videogame->price }}
                            </p>
                            <div class="btn-group">
                                <a href="{{ route('videogames.show', $videogame->id) }}" class="btn btn-info">View</a>
                                <a href="{{ route('videogames.edit', $videogame->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('videogames.destroy', $videogame->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this game?')">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
