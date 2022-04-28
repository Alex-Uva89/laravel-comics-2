@extends('guest.template.base')

@section('title', 'DC Comics - '.$selectedComics['title'])

@section('content')
    <div class="container-comic">
        <h3>{{$selectedComics['title']}} titolo</h3>
        <img src="{{$selectedComics['thumb']}}" alt="{{$selectedComics['title']}} img">
        <div>{{$selectedComics['price']}} prezzo</div>
        <p>{{$selectedComics['description']}}</p>
        <div>{{$selectedComics['series']}}</div>
        <div>{{$selectedComics['sale_date']}}</div>
        <div>{{$selectedComics['type']}}</div>
        <div>
            @foreach ($selectedComics['artists'] as $artist)
                {{$artist}} ,
            @endforeach
        </div>
    </div>
@endsection

{{-- "id" => 2,
        "title" => "American Vampire 1976 #1",
        "description" => "America is broken. Trust between the government and the American public has crumbled. Paranoia reigns supreme. It’s 1976, and this is the concluding chapter of the Eisner Award-winning American Vampire! Skinner Sweet has exhausted all efforts to regain his lost immortality. With his powers and purpose gone, he is now determined to go out with a bang. At a seedy motorcycle rally in the desert where he’s closer than ever to his death wish, Pearl Jones and a shocking partner track him down for one last, desperate mission: The force known as the Gray Trader and its minions are tunneling through the bowels of the world to unleash hell on Earth—just in time for America’s bicentennial. With catastrophe looming, it’s up to Skinner and Pearl to reconcile and change the course of history—or die trying. The series that launched the careers of superstars Scott Snyder and Rafael Albuquerque returns for nine final issues and the closing chapter of the legacy of American Vampire.",
        "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/AV1976_01_300-001_HD_5f738f6e39ddd7.18205602.jpg?itok=VgdYdJ01",
        "price" => "$3.99",
        "series" => "American Vampire 1976",
        "sale_date" => "2020-10-06",
        "type" => "comic book",
        "artists" => [
            "Rafael Albuquerque" --}}