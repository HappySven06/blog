@extends('partials.layout')

@section('titel', 'Home page')

@section('content')
    <div class="container mx-auto">
        <ul>
            @foreach ($posts as $post)
                <li class="list-disc">{{$post->title}}</li>
            @endforeach
        </ul>
    </div>
@endsection
