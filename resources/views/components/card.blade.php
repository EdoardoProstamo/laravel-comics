@props(['comic'])

<div class="card">

    <div class="comic">
        <div class="thumb">
        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
    </div>
    
    <h5>{{ $comic['series'] }}</h5>

    </div>

</div>