@if (Auth::id() != $favorite->id)
    @if (Auth::user()->is_favorites($favorite->id))
        {!! Form::open (['route' => ['favorites.unfavorite', $favorite->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class'=> "btn btn-danger btn-block "]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open (['route' => ['favorites.favorite', $favorite->id]]) !!}
            {!! Form::submit('Favorite', ['class'=> "btn btn-primary btn-block "]) !!}
        {!! Form::close() !!}
    @endif
@endif