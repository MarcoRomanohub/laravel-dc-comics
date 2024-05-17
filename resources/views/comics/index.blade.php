@extends('layout.main')

@section('content')
    <h1>Elenco Prodotti</h1>
    {{-- @if (session('deleted'))
        <div class="alert" role="alert">
            {{ session(deleted) }}
        </div>
    @endif --}}

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Tipologia</th>
                <th scope="col">Serie</th>
                <th scope="col">Data di uscita</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->type }}</td>
                    <td>{{ $product->series }}</td>
                    <td>{{ $product->sale_date }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <a href="{{ route('comics.show', $product) }}" class="btn btn-success "> <i
                                class="fa-regular fa-eye"></i> </a>
                        <a href="{{ route('comics.edit', $product) }}" class="btn btn-warning "><i
                                class="fa-solid fa-pencil"></i></a>
                        <form class="d-inline" action="{{ route('comics.destroy', $product) }}" method="POST"
                            onsubmit="return confirm('sicuro di voler eliminare {{ $product->title }}?')">

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger  "><i class="fa-solid fa-trash"></i></button>

                        </form>
                    </td>

                </tr>

            @empty
                <h2>Nessun prodotto trovato</h2>
            @endforelse

        </tbody>
    </table>
@endsection
