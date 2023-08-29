@extends('template')

@section('content')
    <h1>Se connecter</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{route('auth.login')}} " method="post" class="vstack gap-3">
                @csrf
                <div class="form-group">
                    <label for="mail"></label>
                    <input type="mail" name="email" id="email" class="form-control" value="{{old('mail')}}">
                    @error('email')
                        {{$message}}
                    @enderror
                </div>
                <div class="form-group">
                    <label for="pwd"></label>
                    <input type="password" name="password" id="password" class="form-control">
                    @error('password')
                    {{$message}}
                    @enderror
                </div>
                <button class="btn btn-primary"> Se connecter</button>
            </form>
        </div>
    </div>


@endsection
