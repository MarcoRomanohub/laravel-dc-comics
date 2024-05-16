@extends('layout.main')

@section('content')
    <h1>Nuovo Prodotto</h1>
    <h5>Form di creazione nuovo prodotto</h5>
    <div class="row container-fluid ">
        <div class="col-8">
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo </label>
                    <input type="text" name="title" class="form-control" id="title">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione </label>
                    <textarea name='description' class="form-control" id="description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Copertina </label>
                    <input type="text" name="thumb" class="form-control" id="thumb">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo </label>
                    <input type="text" name="price" class="form-control" id="price">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Serie </label>
                    <input type="text" name="series" class="form-control" id="series">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data di uscita </label>
                    <input type="text" name="sale_date" class="form-control" id="sale_date">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo </label>
                    <input type="text" name="type" class="form-control" id="type">
                </div>
                <div class="mb-3">
                    <label for="artists" class="form-label">Artisti </label>
                    <input type="text" name="artists" class="form-control" id="artists">
                </div>
                <div class="mb-3">
                    <label for="writers" class="form-label">Scrittori </label>
                    <input type="text" name="writers" class="form-control" id="writers">
                </div>

                <button type="submit" class="btn btn-primary">Invia nuovo prodotto</button>
                <button type="reset" class="btn btn-warning">Reset</button>
            </form>
        </div>
    </div>
@endsection