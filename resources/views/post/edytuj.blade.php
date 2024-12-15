@extends('layout.szablon')
@section('tytul', 'Edytowanie postu')
@section('podtytul', 'Edytuj post')
@section('tresc')
@if ($errors->all())

    <div class="alert alert-danger">
        Uzupełnij brakujace błędy
    </div>
@endif
<form action="{{route('post.update', $post->id)}}" method="post" class="w-100">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="tytul">Tytul</label>
        <input  class="form-control" type="text" name="tytul" id="tytul" placeholder="Podaj tytuł postu" value="@if(old('tytul') !== null){{old('tytul')}}@else{{$post->tytul}}@endif">
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
        <textarea class="form-control" name="tresc" id="tresc"  rows="4">@if(old('tresc') !== null){{old('tresc')}}@else{{$post->tresc}}@endif</textarea>
        @if ($errors->get('tresc'))
            <div class="alert alert-danger">
                @foreach ($errors->get('tresc') as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>
        @endif
    </div>
    <button class="btn btn-primary form-btn mt-3" type="submit">Zmień post</button>
</form>
@endsection