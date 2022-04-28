@extends('guest.template.base')

@section('title', 'DC - Home')

@section('content')
<div class="container-background">
    <div class="container-card">
        @foreach ($comics as $comic)
            <div class="card">
                <a href="http://">
                    <img src="{{ $comic['thumb'] }}" alt="{{$comic['title']}} img">
                    <h3>{{ $comic['title'] }}</h3>
                </a>
            </div>
        @endforeach

    </div>
    <div class="container-btn">
        <button type="button" class="btn-primary">load more</button>
    </div>
</div>
@endsection