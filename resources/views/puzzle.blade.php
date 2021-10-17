@extends('layout.master')

@section('content')
    <!-- Header -->
    <header id="header" class="alt">
        <div class="logo"><a href="{{url('')}}">Portfolio <span>by GERBEN PUT</span></a></div>
        <a href="#menu">Menu</a>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </header>

    <!-- One -->
    <section id="One" class="wrapper style3">
        <div class="inner">
            <header class="align-center">
                <p>Work by GERBEN</p>
                <h2>Puzzle</h2>
            </header>
        </div>
    </section>

    <!-- Main -->
    <section id="one" class="wrapper style2">
        <div class="inner2 fade-in one">
            <div class="grid-style2">
                <div data-aos-delay="700">
                    <div class="box">
                        <a href="https://www.overmijzelf.nl"><h3>Inspecteer mij!</h3></a>
                        <blockquote>Open opnieuw de DevTool en voer het volgende in onder de div met een class genaamd box.<br>
                                <xmp>
<div class="image fit">
    <img src="{{ asset('images/puzzle.jpg') }}" alt=""/>
</div>
                                </xmp>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
