<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($manyVid as $manys)
        <iframe width="420" height="315" src="http://www.youtube.com/embed/{{ $link }}?autoplay=1"></iframe>
    @endforeach
</body>
</html>
