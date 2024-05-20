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
                        value="{{ old('title', $comic->title) }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione </label>
                    <textarea name='description' class="form-control" id="description">{{ $comic->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Copertina </label>
                    <input type="text" name="thumb" class="form-control" id="thumb"
                        value="{{ old('thumb', $comic->thumb) }}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo </label>
                    <input type="text" name="price" class="form-control" id="price"
                        value="{{ old('price', $comic->price) }}">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Serie </label>
                    <input type="text" name="series" class="form-control" id="series"
                        value="{{ old('series', $comic->series) }}">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data di uscita </label>
                    <input type="date" name="sale_date" class="form-control" id="sale_date"
                        value="{{ old('sale_date', $comic->sale_date) }}">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo </label>
                    <input type="text" name="type" class="form-control" id="type"
                        value="{{ old('type', $comic->type) }}">
                </div>
                <div class="mb-3">
                    <label for="artists" class="form-label">Artisti </label>
                    <input type="text" name="artists" class="form-control" id="artists"
                        value="{{ old('artists', $comic->artists) }}">
                </div>
                <div class="mb-3">
                    <label for="writers" class="form-label">Scrittori </label>
                    <input type="text" name="writers" class="form-control" id="writers"
                        value="{{ old('writers', $comic->writers) }}">
                </div>

                <button type="submit" class="btn btn-primary">Modifica prodotto</button>
                <button type="reset" class="btn btn-warning">Reset</button>
            </form>
        </div>
    </div>
@endsection
