@extends('template')

@section('content')
    <h1>Se connecter</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{route('auth.login')}} " method="post" class="vstack gap-3">

                <div class="form-group">
                    <label for="mail"></label>
                    <input type="mail" name="mail" id="mail" class="form-control" value="{{old('mail')}}">
                    @error('mail')
                        {{$message}}
                    @enderror
                </div>
                <div class="form-group">
                    <label for="pwd"></label>
                    <input type="password" name="pwd" id="pwd" class="form-control">
                    @error('pwd')
                    {{$message}}
                    @enderror
                </div>
                <button class="btn btn-primary"> Se connecter</button>
            </form>
        </div>
    </div>


@endsection
