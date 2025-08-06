<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Comics</title>
</head>
<body>

    @extends('layouts/layout')


    @php

        $comics = config("comics");
        // dd($comics);

    @endphp

    @section('contenuto')
        <div class="bg-dark text-white py-5">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="text-primary">Current Series</h2>
            </div>
            <div class="row">
                @foreach ($comics as $comic)
                    <x-card :comic="$comic" />
                @endforeach
            </div>
            <div class="text-center mt-4">
                <button class="btn btn-primary text-uppercase px-4">Load More</button>
            </div>
        </div>
    </div>
    @endsection


</body>
</html>