<header>
    <div class="front">dc power</div>
    <div class="container-header">
        <img alt="Dc logo" src="{{ asset('/images/dc-logo.png') }}">
        <ul class="navbar">
            {{-- @foreach ($collection as $item)
              <li><a href=""{{ route::currentRouteName() == $menuItem['route'] ? 'active' : '' }}"> 
            @endforeach --}}
            <li><a href="{{ route('characters')}}">Characters</a></li>
            <li><a href="{{ route('home')}}">comics</a></li>
            <li><a href="{{ route('movies')}}">movies</a></li>
            <li><a href="{{ route('tv')}}">tv</a></li>
            <li><a href="{{ route('games')}}">games</a></li>
            <li><a href="{{ route('collectibles')}}">collectibles</a></li>
            <li><a href="{{ route('videos')}}">videos</a></li>
            <li><a href="{{ route('fans')}}">fan</a></li>
            <li><a href="{{ route('news')}}">news</a></li>
            <li class="shop">shop</li>
        </ul>
        <input type="text" placeholder="search">
    </div>
</header>