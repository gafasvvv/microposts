@extends('layouts.app')

@section('content')
    <div class="center jumbotron mt-5">
        <div class="text-center">
            <h1>Welcome to the Microposts</h1>
            <div class="mt-4">
            {!! link_to_route('signup.get','Sign up now!!!',[],['class'=>'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    </div>
@endsection