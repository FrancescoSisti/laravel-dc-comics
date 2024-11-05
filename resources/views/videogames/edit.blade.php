@extends('layout.app')

@section('content')
<div class="container">
    <h1>Edit Videogame: {{ $videogame->title }}</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('videogames.update', $videogame->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title*</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror"
                   id="title" name="title" value="{{ old('title', $videogame->title) }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror"
                      id="description" name="description">{{ old('description', $videogame->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="publisher" class="form-label">Publisher*</label>
            <input type="text" class="form-control @error('publisher') is-invalid @enderror"
                   id="publisher" name="publisher" value="{{ old('publisher', $videogame->publisher) }}">
        </div>

        <!-- Repeat the same pattern for all other fields -->

        <button type="submit" class="btn btn-primary">Update Videogame</button>
    </form>
</div>
@endsection
