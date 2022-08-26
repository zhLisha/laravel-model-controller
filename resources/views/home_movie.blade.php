<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lista dei film</h1>
    <ul>
        @foreach ($movies as $movie)
            <li>
                <a href="">{{$movie->title}}</a> 
            </li>
        @endforeach
    </ul>
</body>
</html>

<style>
    ul {
        list-style-type: none;
    }
    a {
        text-decoration: none;
        color: inherit;
    }

    a:hover {
        color: lightpink
    }

    li {
        padding: 10px 0;
    }
</style>