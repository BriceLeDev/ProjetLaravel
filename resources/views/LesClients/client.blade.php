@extends('template')

@section('titre','Les client')
@section('content')

    <form method="post" action="">
        @csrf
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" value="{{old('nom','votre nom')}} " class="form-control">
            @error('nom')
                {{$message}}
            @enderror
        </div>
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" value="{{old('prenom','Votre prénom')}} " class="form-control">
            @error('prenom')
            {{$message}}
            @enderror
        </div>

        <button class="btn btn-primary"> Envoyer</button>
    </form>



@endsection
