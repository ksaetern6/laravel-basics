@extends('layouts.app')

@section('content')
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        
        {{-- @if ($errors->has('title'))
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif  --}}

        <div>
            <input type="test" name="title" id="title" value="{{ old('title') }}">
            <div>
                @error('title')
                    {{ $message }}
                @enderror
            </div>
        </div>

        <div>
            <textarea name="body" id="body">{{ old('body') }}</textarea>
            <div>
                @error('body')
                    {{ $message }}
                @enderror
            </div>
        </div>

        <button type="submit">Post</button>
    </form>
@endsection