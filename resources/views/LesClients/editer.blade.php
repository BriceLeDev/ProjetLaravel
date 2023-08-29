@extends('template')

@section('titre','Les client')
@section('content')

    <form method="post" action="">
        @csrf
        <div class="form-group">
            <input type="text" name="nom" value="{{$UnClient->nom}}"  class="form-control">
            @error('nom')
            {{$message}}
            @enderror
        </div>
        <div class="form-group">
            <input type="text" name="prenom" value="{{$UnClient->prenom}}"  class="form-control">
            @error('prenom')
            {{$message}}
            @enderror
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control" >
            @error('image')
            {{$message}}
            @enderror
        </div>
        <button class="btn btn-primary"> Modifier</button>
    </form>


@endsection
