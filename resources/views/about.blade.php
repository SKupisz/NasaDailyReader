@extends("layouts.app")

@section('content')
    <header class = "main-header">About us</header>
    <div class = "about-desc text-center">
        NasaDailyReader is a small IT project made to share the beauty of the space. 
        In order to do this, we use the official NASA's API (<a href = "https://api.nasa.gov">https://api.nasa.gov</a>).
    </div>
    <div class = "desc large-desc text-center float-left">
        <header class = "desc-header">How is it built?</header>
        To make this page, I used Laravel PHP framework. For more technical
        detais, visit <a href = "#">the github repository</a>
    </div>
    <div class = "desc large-desc text-center float-right">
        <header class = "desc-header">Who made this?</header>
        I am 16 years old Polish programmer, also great passionate of web programming.
        I have been interested in the astronomy since I was a child. When I was on a sailing camp
        on Masuria, in Poland, one night I went out of my boat and I saw the clearest sky ever. That time I decided to create an app
        for sharing this views with the world. Here, the NASA's API very helped me. If you are interested, check my <a href = "https://skupisz.netlify.com">portfolio site</a>.
    </div>
@endsection