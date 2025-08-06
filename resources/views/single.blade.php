<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comic-details</title>
</head>
<body>
    
    @extends('layouts/layout')

    @php

    $comics = config("comics");
    dd($comics);
    
    @endphp

    @section('contenuto')

    <h1>Informazioni fumetto singolo</h1>

    @endsection


</body>
</html>


