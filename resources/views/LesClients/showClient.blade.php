@extends('template')

@section('title','Mon blogue')


@section('content')
    <h1>Liste des utilisateurs</h1>
    @foreach($clients as $client)

        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">
                <article>
                    {{$client->nom}}
                </article>
            </div>
            <div class="card-body">
                <article>
                    {{$client->prenom}}
                    <p class="small">
                        @if($client->monprofile)

                                 {{$client->monprofile->name}}

                        @endif

                            @if($client->taggs)
                                @foreach($client->taggs as $tag)
                                    <span class="badge bg-secondary">
                                       {{$tag->name }}
                                   </span>
                                @endforeach
                            @endif

                    </p>
                </article>
            </div>
        </div>
    @endforeach
    {{$clients->links()}}

@endsection
