<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-comics</title>
</head>
<body>
    <h1>
        Questa è la home home
    </h1>
    @foreach ($books as $book)
        <h2>
            {{$book['title']}}
        </h2>
    @endforeach
</body>
</html>