@extends('template')

@section('titre','Les client')
@section('content')

    <form method="post" action="">
        @csrf
        <div>
            <input type="text" name="nom" value="{{$UnClient->nom}}">
            @error('nom')
            {{$message}}
            @enderror
        </div>
        <div>
            <input type="text" name="prenom" value="{{$UnClient->prenom}}">
            @error('prenom')
            {{$message}}
            @enderror
        </div>
        <button class="btn btn-primary"> Modifier</button>
    </form>


@endsection
