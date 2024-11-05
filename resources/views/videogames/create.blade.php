@extends('layout.app')

@section('content')
<div class="container">
    <h1>Create New Videogame</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('videogames.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title*</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror"
                   id="title" name="title" value="{{ old('title') }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror"
                      id="description" name="description">{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="publisher" class="form-label">Publisher*</label>
            <input type="text" class="form-control @error('publisher') is-invalid @enderror"
                   id="publisher" name="publisher" value="{{ old('publisher') }}">
        </div>

        <div class="mb-3">
            <label for="developer" class="form-label">Developer*</label>
            <input type="text" class="form-control @error('developer') is-invalid @enderror"
                   id="developer" name="developer" value="{{ old('developer') }}">
        </div>

        <div class="mb-3">
            <label for="release_date" class="form-label">Release Date*</label>
            <input type="date" class="form-control @error('release_date') is-invalid @enderror"
                   id="release_date" name="release_date" value="{{ old('release_date') }}">
        </div>

        <div class="mb-3">
            <label for="genre" class="form-label">Genre*</label>
            <input type="text" class="form-control @error('genre') is-invalid @enderror"
                   id="genre" name="genre" value="{{ old('genre') }}">
        </div>

        <div class="mb-3">
            <label for="platform" class="form-label">Platform*</label>
            <input type="text" class="form-control @error('platform') is-invalid @enderror"
                   id="platform" name="platform" value="{{ old('platform') }}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price*</label>
            <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror"
                   id="price" name="price" value="{{ old('price') }}">
        </div>

        <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            <input type="number" class="form-control @error('rating') is-invalid @enderror"
                   id="rating" name="rating" value="{{ old('rating') }}">
        </div>

        <div class="mb-3">
            <label for="cover_image" class="form-label">Cover Image URL</label>
            <input type="url" class="form-control @error('cover_image') is-invalid @enderror"
                   id="cover_image" name="cover_image" value="{{ old('cover_image') }}">
        </div>

        <div class="mb-3">
            <label for="multiplayer" class="form-label">Multiplayer</label>
            <select class="form-control @error('multiplayer') is-invalid @enderror"
                    id="multiplayer" name="multiplayer">
                <option value="1" {{ old('multiplayer') == '1' ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ old('multiplayer') == '0' ? 'selected' : '' }}>No</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="max_players" class="form-label">Max Players</label>
            <input type="number" class="form-control @error('max_players') is-invalid @enderror"
                   id="max_players" name="max_players" value="{{ old('max_players') }}">
        </div>

        <div class="mb-3">
            <label for="language" class="form-label">Language*</label>
            <input type="text" class="form-control @error('language') is-invalid @enderror"
                   id="language" name="language" value="{{ old('language') }}">
        </div>

        <div class="mb-3">
            <label for="age_rating" class="form-label">Age Rating*</label>
            <input type="text" class="form-control @error('age_rating') is-invalid @enderror"
                   id="age_rating" name="age_rating" value="{{ old('age_rating') }}">
        </div>

        <div class="mb-3">
            <label for="storage_required" class="form-label">Storage Required (GB)*</label>
            <input type="number" class="form-control @error('storage_required') is-invalid @enderror"
                   id="storage_required" name="storage_required" value="{{ old('storage_required') }}">
        </div>

        <button type="submit" class="btn btn-primary">Create Videogame</button>
    </form>
</div>
@endsection
