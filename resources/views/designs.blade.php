@extends('layout.master')

@section('content')
<!-- Header -->
<header id="header" class="alt">
    <div class="logo"><a href="{{url('')}}">Portfolio <span>by GERBEN PUT</span></a></div>
    <a href="#menu">Menu</a>
</header>

<!-- One -->
<section id="One" class="wrapper style3">
    <div class="inner">
        <header class="align-center">
            <p>Work by GERBEN</p>
            <h2>DESIGNS</h2>
        </header>
    </div>
</section>

<!-- Banner -->
<section id="redirecttodesign" class="banner full">
    <article>
        <img src="{{ asset('images/image1.jpg') }}" alt="slider1"/>
        <div class="inner">
            <header>
                <p>2D design</p>
                <h2 class="h2">Gerben</h2>
            </header>
        </div>
    </article>
    <article>
        <img src="{{ asset('images/mic.jpg') }}" alt=""/>
        <div class="inner">
            <header>
                <p>3D design</p>
                <h2 class="h2">Microphone</h2>
            </header>
        </div>
    </article>
    <article>
        <img src="{{ asset('images/donut.jpg') }}" alt=""/>
        <div class="inner">
            <header>
                <p>3D design</p>
                <h2 class="h2">Donut</h2>
            </header>
        </div>
    </article>
    <article>
        <img src="{{ asset('images/couch.jpg') }}" alt=""/>
        <div class="inner">
            <header>
                <p>3D design</p>
                <h2 class="h2">Couch</h2>
            </header>
        </div>
    </article>
    <article>
        <img src="{{ asset('images/couch2.jpg') }}" alt=""/>
        <div class="inner">
            <header>
                <p>3D design</p>
                <h2 class="h2">Couch</h2>
            </header>
        </div>
    </article>
    <article>
        <img src="{{ asset('images/couch3.jpg') }}" alt=""/>
        <div class="inner">
            <header>
                <p>3D design</p>
                <h2 class="h2">Couch</h2>
            </header>
        </div>
    </article>
    <article>
        <img src="{{ asset('images/couch4.jpg') }}" alt=""/>
        <div class="inner">
            <header>
                <p>3D design</p>
                <h2 class="h2">Couch</h2>
            </header>
        </div>
    </article>
    <article>
        <img src="{{ asset('images/image8.jpg') }}" alt=""/>
        <div class="inner">
            <header>
                <p>3D design</p>
                <h2 class="h2">VEROX</h2>
            </header>
        </div>
    </article>
    <article>
        <img src="{{ asset('images/image9.jpg') }}" alt=""/>
        <div class="inner">
            <header>
                <p>3D design</p>
                <h2 class="h2">TREX</h2>
            </header>
        </div>
    </article>
    <article>
        <img src="{{ asset('images/image6.jpg') }}" alt=""/>
        <div class="inner">
            <header>
                <p>3D design</p>
                <h2 class="h2">Briezy</h2>
            </header>
        </div>
    </article>
    <article>
        <img src="{{ asset('images/image7.jpg') }}" alt=""/>
        <div class="inner">
            <header>
                <p>2D Intro</p>
                <h2 class="h2">Richer</h2>
            </header>
        </div>
    </article>
    <article>
        <img src="{{ asset('images/image10.jpg') }}" alt=""/>
        <div class="inner">
            <header>
                <p>2D Intro</p>
                <h2 class="h2">Dutch intro battle</h2>
            </header>
        </div>
    </article>
    <article>
        <img src="{{ asset('images/image11.jpg') }}" alt=""/>
        <div class="inner">
            <header>
                <p>2D Thumbnail</p>
                <h2 class="h2">DeadlyResets</h2>
            </header>
        </div>
    </article>
    <article>
        <img src="{{ asset('images/image12.jpg') }}" alt=""/>
        <div class="inner">
            <header>
                <p>2D Banner</p>
                <h2 class="h2">Bandito</h2>
            </header>
        </div>
    </article>
    <article>
        <img src="{{ asset('images/image14.jpg') }}" alt=""/>
        <div class="inner">
            <header>
                <p>2D Postcard</p>
                <h2 class="h2">TCR</h2>
            </header>
        </div>
    </article>
</section>
@endsection
