@extends('layout.szablon')
@section('tytul', 'Dodawnie postu')
@section('podtytul', 'Dodaj post')
@section('tresc')
<form action="{{route('post.store')}}" method="post" class="w-100">
    @csrf
    <div class="form-group">
        <label for="tytul">Tytul</label>
        <input  class="form-control" type="text" name="tytul" id="tytul" placeholder="Podaj tytuł postu" value="{{old('tytul')}}">
    </div>
    <div class="form-group">
        <label for="autor">Autor</label>
        <input  class="form-control" type="text" name="autor" id="autor" placeholder="Podaj autora postu" value="{{old('autor')}}">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input  class="form-control" type="text" name="email" id="email" placeholder="Podaj email autora postu" value="{{old('email')}}">
    </div>
    <div class="form-group">
        <label for="tresc">Treść</label>
        <textarea class="form-control" name="tresc" id="tresc"  rows="4">{{old('tresc')}}</textarea>
    </div>
    <button class="btn btn-primary form-btn mt-3" type="submit">Dodaj post</button>
</form>
@endsection