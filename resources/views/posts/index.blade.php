@extends('layouts.app')

@section('content')
@if ( count($posts) )
    @foreach( $posts as $post )
        <div>
            {{ $post['title']; }}
        </div>
    @endforeach
@else
    There are no posts
@endif
@endsection