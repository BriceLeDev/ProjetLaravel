@extends('template')

@section('title',$posts->titre)


@section('content')


        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">
                <article>
                    {{$posts->titre}}
                </article>
            </div>
            <div class="card-body">
                <article>
                    {{$posts->contenu}}
                </article>
            </div>
        </div>


@endsection
