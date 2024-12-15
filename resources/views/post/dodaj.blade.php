@extends('layout.szablon')
@section('tytul', 'Dodawnie postu')
@section('podtytul', 'Dodaj post')
@section('tresc')
@if ($errors->all())

    <div class="alert alert-danger">
        Uzupełnij brakujace błędy
    </div>
@endif
<form action="{{route('post.store')}}" method="post" class="w-100">
    @csrf
    <div class="form-group">
        <label for="tytul">Tytul</label>
        <input  class="form-control" type="text" name="tytul" id="tytul" placeholder="Podaj tytuł postu" value="{{old('tytul')}}">
        @if ($errors->get('tytul'))
            <div class="alert alert-danger">
                @foreach ($errors->get('tytul') as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="tresc">Treść</label>
        <textarea class="form-control" name="tresc" id="tresc"  rows="4">{{old('tresc')}}</textarea>
        @if ($errors->get('tresc'))
            <div class="alert alert-danger">
                @foreach ($errors->get('tresc') as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>
        @endif
    </div>
    <button class="btn btn-success form-btn mt-2 m-1" type="submit">Dodaj post</button>
</form>
<a href="{{route('post.index')}}">
    <button class="btn btn-primary form-btn mt-2 m-1" type="button">Powrót do listy</button></a>
@endsection