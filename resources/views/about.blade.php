@extends('layouts.base')

@section('title', 'About')

@section('content')
    @foreach ($books as $book)
        @if (@$loop->index % 3 == 0)
            <div class="content-wrapper">
        @endif

        <div class="card">
            <div class="thumb">
                <img src="{{ $book['thumb'] }}" alt="thumb">
            </div>
            <h2 class="title">
                <a href="">{{ $book['title'] }}</a>
            </h2>
        </div>

        @if (@$loop->index % 3 == 2)
            </div>
        @endif
    @endforeach
@endsection
