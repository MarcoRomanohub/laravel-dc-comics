@extends('layout.main')

@section('content')
    <h1>{{ $comic->title }}</h1>
    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
    <p>{{ $comic->description }}</p>
    <a href="{{ route('comics.index') }}" class="btn btn-info ">Torna all'elenco </a>
@endsection
