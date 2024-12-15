@extends('layout.szablon')
@section('tytul', 'Szczegóły postu')
@section('podtytul', 'Informacje w poście')
@section('tresc')


    <div class="form-group">
        <label for="tytul">Tytul</label>
        <input  class="form-control" type="text" name="tytul" id="tytul" placeholder="Podaj tytuł postu" value="{{$post->tytul}}" disabled>
    </div>
    <div class="form-group">
        <label for="autor">Autor</label>
        <input  class="form-control" type="text" name="autor" id="autor" placeholder="Podaj autora postu" value="{{$post->autor}}" disabled>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input  class="form-control" type="email" name="email" id="email" placeholder="Podaj email autora postu" value="{{$post->email}}" disabled>
    </div>
    <div>Data utworzenia: {{date('j F Y H:i:s',strtotime($post->created_at))}}</div>
    <div>Data modyfikacji: {{date('j F Y H:i:s',strtotime($post->updated_at))}}</div>
    <div class="form-group">
        <label for="tresc">Treść</label>
        <textarea class="form-control" name="tresc" id="tresc"  rows="4" disabled>{{$post->tresc}}</textarea>
    </div>
    <div><a href="{{route('post.index')}}">
    <button class="btn btn-primary form-btn mt-2 m-1" type="button">Powrót do listy</button></a>
    @auth
    <a href="{{route('post.edit', $post->id)}}"><button class="btn btn-success form-btn mt-2 m-1">Edytuj</button></a>   
    @endauth

</div>


@endsection