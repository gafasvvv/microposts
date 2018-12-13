@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            @include('users.card', ['user' => $user])
        </aside>
        <div class="col-sm-8">
            @include('users.navtabs', ['user' => $user])
            <ul class="media-list">
                @foreach ($favorites as $favorite)
                    <li class="media mb-3">
                        <img class="media-objest rounded" src="{{ Gravatar::src($user->email, 50) }}" alt="">
                        <div class="media-body ml-3">
                            <div>
                                {!! link_to_route('users.favorites', $favorite->user->name, ['id'=> $favorite->user->id]) !!}
                                <span class="text-muted">posted at {{ $favorite->created_at }}</span>
                            </div>
                            <div>
                                <p>{!! nl2br(e($favorite->content)) !!}</p>
                            </div>
                            <div>
                                @include('favorite.favorite_button', ['favorite' => $favorite])
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
{{ $favorites->render('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection