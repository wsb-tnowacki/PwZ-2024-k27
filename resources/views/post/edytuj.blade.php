@extends('layout.szablon')
@section('tytul', 'Edytowanie postu')
@section('podtytul', 'Edytuj post')
@section('tresc')
<form action="{{route('post.update', $post->id)}}" method="post" class="w-100">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="tytul">Tytul</label>
        <input  class="form-control" type="text" name="tytul" id="tytul" placeholder="Podaj tytuł postu" value="@if(old('tytul') !== null){{old('tytul')}}@else{{$post->tytul}}@endif">
    </div>
    <div class="form-group">
        <label for="autor">Autor</label>
        <input  class="form-control" type="text" name="autor" id="autor" placeholder="Podaj autora postu" value="@if(old('autor') !== null){{old('autor')}}@else{{$post->autor}}@endif">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input  class="form-control" type="email" name="email" id="email" placeholder="Podaj email autora postu" value="@if(old('email') !== null){{old('email')}}@else{{$post->email}}@endif">
    </div>
    <div class="form-group">
        <label for="tresc">Treść</label>
        <textarea class="form-control" name="tresc" id="tresc"  rows="4">@if(old('tresc') !== null){{old('tresc')}}@else{{$post->tresc}}@endif</textarea>
    </div>
    <button class="btn btn-primary form-btn mt-3" type="submit">Zmień post</button>
</form>
@endsection