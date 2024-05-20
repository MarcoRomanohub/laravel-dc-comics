@extends('layout.main')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row container-fluid ">
        <div class="col-8">
            <form action="{{ route('comics.update', $comic) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo </label>
                    <input type="text" name="title" class="form-control" id="title"
                        value="{{ old(' $comic->title', $comic->title) }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione </label>
                    <textarea name='description' class="form-control" id="description">{{ $comic->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Copertina </label>
                    <input type="text" name="thumb" class="form-control" id="thumb"
                        value="{{ old('$comic->thumb', $comic->thumb) }}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo </label>
                    <input type="text" name="price" class="form-control" id="price"
                        value="{{ old('$comic->price', $comic->price) }}">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Serie </label>
                    <input type="text" name="series" class="form-control" id="series"
                        value="{{ old('$comic->series', $comic->series) }}">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data di uscita </label>
                    <input type="date" name="sale_date" class="form-control" id="sale_date"
                        value="{{ old('$comic->sale_date', $comic->sale_date) }}">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo </label>
                    <input type="text" name="type" class="form-control" id="type"
                        value="{{ old('$comic->type', $comic->type) }}">
                </div>
                <div class="mb-3">
                    <label for="artists" class="form-label">Artisti </label>
                    <input type="text" name="artists" class="form-control" id="artists"
                        value="{{ old('$comic->artists', $comic->artists) }}">
                </div>
                <div class="mb-3">
                    <label for="writers" class="form-label">Scrittori </label>
                    <input type="text" name="writers" class="form-control" id="writers"
                        value="{{ old('$comic->writers', $comic->writers) }}">
                </div>

                <button type="submit" class="btn btn-primary">Modifica prodotto</button>
                <button type="reset" class="btn btn-warning">Reset</button>
            </form>
        </div>
    </div>
@endsection
