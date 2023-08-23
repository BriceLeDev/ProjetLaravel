@extends('template')

@section('titre','Les client')
@section('content')

    <form method="post" action="">
        @csrf
        <div>
            <input type="text" name="nom" value="{{old('nom','votre nom')}}">
            @error('nom')
                {{$message}}
            @enderror
        </div>
        <div>
            <input type="text" name="prenom" value="{{old('prenom','Votre prénom')}}">
            @error('prenom')
            {{$message}}
            @enderror
        </div>
        <button class="btn btn-primary"> Envoyer</button>
    </form>


@endsection
