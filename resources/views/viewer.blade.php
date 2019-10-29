@extends("layouts.app")

@section("content")
    <header class = "main-header">Photo of the day</header>
    <figure class = "photoOfTheDay">
        @if($passing[0] == "image")
        <img src = "{{$passing[1]}}" class = "daily-photo"/>
        @else
        <iframe class = "daily-photo" src = "{{$passing[1]}}"></iframe>
        @endif
    <figcaption>{{$passing[2]}}</figcaption>
    </figure>
    <div class = "desc">
        {{$passing[3]}}
    </div>
@endsection