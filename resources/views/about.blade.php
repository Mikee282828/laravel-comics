<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    @include('partials.header')

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

</body>

</html>
