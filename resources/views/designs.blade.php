@extends('layout.master')

@section('content')
<!-- Header -->
<header id="header" class="alt">
    <div class="logo"><a href="{{url('')}}">Portfolio <span>by GERBEN PUT</span></a></div>
    <a href="#menu">Menu</a>
</header>

<!-- One -->
<div class="snap">
    <section id="One" class="wrapper style3">
        <div class="inner">
            <header class="align-center">
                <p>Work by GERBEN</p>
                <h2>DESIGNS</h2>
            </header>
        </div>
    </section>
</div>

<!-- Banner -->
<div class="snap">
    <section id="redirecttodesign" class="banner full">
        <article>
            <img src="{{ asset('images/mic.jpg') }}" alt="slider1"/>
            <div class="inner">
                <header>
                    <p>3D design</p>
                    <h2 class="welcometext">Mic</h2>
                </header>
            </div>
        </article>
        <article>
            <img src="{{ asset('images/donut.jpg') }}" alt=""/>
            <div class="inner">
                <header>
                    <p>3D design</p>
                    <h2 class="welcometext">Donut</h2>
                </header>
            </div>
        </article>
        <article>
            <img src="{{ asset('images/couch.jpg') }}" alt=""/>
            <div class="inner">
                <header>
                    <p>3D design</p>
                    <h2 class="welcometext">Couch</h2>
                </header>
            </div>
        </article>
        <article>
            <img src="{{ asset('images/couch2.jpg') }}" alt=""/>
            <div class="inner">
                <header>
                    <p>3D design</p>
                    <h2 class="welcometext">Couch</h2>
                </header>
            </div>
        </article>
        <article>
            <img src="{{ asset('images/couch3.jpg') }}" alt=""/>
            <div class="inner">
                <header>
                    <p>3D design</p>
                    <h2 class="welcometext">Couch</h2>
                </header>
            </div>
        </article>
        <article>
            <img src="{{ asset('images/couch4.jpg') }}" alt=""/>
            <div class="inner">
                <header>
                    <p>3D design</p>
                    <h2 class="welcometext">Couch</h2>
                </header>
            </div>
        </article>
        <article>
            <img src="{{ asset('images/image8.jpg') }}" alt=""/>
            <div class="inner">
                <header>
                    <p>3D design</p>
                    <h2 class="welcometext">VEROX</h2>
                </header>
            </div>
        </article>
        <article>
            <img src="{{ asset('images/image9.jpg') }}" alt=""/>
            <div class="inner">
                <header>
                    <p>3D design</p>
                    <h2 class="welcometext">TREX</h2>
                </header>
            </div>
        </article>
        <article>
            <img src="{{ asset('images/image6.jpg') }}" alt=""/>
            <div class="inner">
                <header>
                    <p>3D design</p>
                    <h2 class="welcometext">Briezy</h2>
                </header>
            </div>
        </article>
        <article>
            <img src="{{ asset('images/image7.jpg') }}" alt=""/>
            <div class="inner">
                <header>
                    <p>2D Intro</p>
                    <h2 class="welcometext">Richer</h2>
                </header>
            </div>
        </article>
        <article>
            <img src="{{ asset('images/image10.jpg') }}" alt=""/>
            <div class="inner">
                <header>
                    <p>2D Intro</p>
                    <h2 class="welcometext">DIB</h2>
                </header>
            </div>
        </article>
        <article>
            <img src="{{ asset('images/image11.jpg') }}" alt=""/>
            <div class="inner">
                <header>
                    <p>2D Thumbnail</p>
                    <h2 class="welcometext">DR</h2>
                </header>
            </div>
        </article>
        <article>
            <img src="{{ asset('images/image12.jpg') }}" alt=""/>
            <div class="inner">
                <header>
                    <p>2D Banner</p>
                    <h2 class="welcometext">Bandito</h2>
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
</div>
@endsection
