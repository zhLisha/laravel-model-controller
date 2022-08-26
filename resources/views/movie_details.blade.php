<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Dettagli film</h2>

    <div class="title">
        <h3>Titolo: </h3>
        <span>"{{ $details->title }}"</span>
    </div>
    <div class="original-title">
        <h3>Titolo Originale: </h3>
        <span>"{{ $details->original_title }}"</span>
    </div>

    <div class="origin">
        <h3>Origine: </h3>
        <span>"{{ $details->nationality }}"</span>
    </div>

    <div class="date">
        <h3>Data di uscita: </h3>
        <span>"{{ $details->date }}"</span>
    </div>

    <div class="reviews">
        <h3>Voto: </h3>
        <span>"{{ $details->vote }}"</span>
    </div>
</body>
</html>

<style>
    h3 {
        display: inline-block;
        margin-right: 10px
    }
</style>