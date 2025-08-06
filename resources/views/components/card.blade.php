@props(['comic'])

<div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
    <div class="card bg-dark text-white border-0 h-100">
        <a href="{{route('single')}}">
            <img src="{{ $comic['thumb'] }}" class="card-img-top img-fluid" alt="{{ $comic['series'] }}">
        </a>
        <div class="card-body p-2">
            <h6 class="card-title text-center text-uppercase">{{ $comic['series'] }}</h6>
        </div>
    </div>
</div>
