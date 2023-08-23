
@extends('template')

@section('title','Mon blogue')


@section('content')
    <h1>Mon premier view avec un template</h1>
    @foreach($post as $posts)

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

                <p><a href="{{route('article',['slug'=>$posts->slug, 'id'=>$posts->id])}}">Lire la suite</a></p>

                {{$post->links()}}
    @endforeach
@endsection
