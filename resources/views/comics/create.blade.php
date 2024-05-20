@extends('layout.main')

@section('content')
    <h1>Nuovo Prodotto</h1>


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
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo (*) </label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror "
                        id="title" value="{{ old('title') }}">

                    @error('title')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione </label>
                    <textarea name='description' class="form-control" id="description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label @error('thumb') is-invalid @enderror">Copertina </label>
                    <input type="text" name="thumb" class="form-control" id="thumb" value="{{ old('thumb') }}">
                    @error('thumb')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label @error('price') is-invalid @enderror">Prezzo(*) </label>
                    <input type="text" name="price" class="form-control" id="price" value="{{ old('price') }}">
                    @error('price')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label @error('series') is-invalid @enderror">Serie(*) </label>
                    <input type="text" name="series" class="form-control" id="series" value="{{ old('series') }}">
                    @error('series')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label @error('sale_date') is-invalid @enderror">Data di uscita
                        (*)</label>
                    <input type="date" name="sale_date" class="form-control" id="sale_date"
                        value="{{ old('sale_date') }}">
                    @error('sale_date')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label @error('type') is-invalid @enderror">Tipo (*)</label>
                    <input type="text" name="type" class="form-control" id="type" value="{{ old('type') }}">
                    @error('type')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="artists" class="form-label">Artisti </label>
                    <input type="text" name="artists" class="form-control" id="artists" value="{{ old('artists') }}">
                </div>
                <div class="mb-3">
                    <label for="writers" class="form-label">Scrittori </label>
                    <input type="text" name="writers" class="form-control" id="writers" value="{{ old('writers') }}">
                </div>

                <button type="submit" class="btn btn-primary">Invia nuovo prodotto</button>
                <button type="reset" class="btn btn-warning">Reset</button>
            </form>
        </div>
    </div>
@endsection
