@extends('szablon')
@section('tytul')
    O nas
@endsection
@section('podtytul')
    Strona o nas
@endsection
@section('tresc')
    <div>
        Treść strony o nas <br />
        <ol>
            @foreach ($zadania as $zadanie)
                <li>{{ $zadanie }}</li>
            @endforeach
        </ol>
    </div>
@endsection