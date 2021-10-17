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
                <h2>Winnaars</h2>
            </header>
        </div>
    </section>

    <!-- Main -->
    <section id="one" class="wrapper style2">
        <div class="inner2 fade-in one">
            <div class="grid-style2">
                <div data-aos-delay="700">
                    <div class="box">
                        <div class="image fit">
                            <img src="{{ asset('images/winners.jpg') }}" alt=""/>
                        </div>
                        <a href=""><h3>Gerben:</h3></a>
                        <blockquote>
                            Bonjour, Guten tag, Hello, Hallo!
                            Leuk dat je mijn puzzel hebt opgelost!
                            Om dit te vieren mag jij een mooi plekje op deze prachtige muur der winnaars!
                            Stuur me gerust een berichtje naar mijn mail doormiddel van het contact formulier.
                            Zet in de beschrijving de tekst "Winnaars geven nooit op!" en de naam die op deze
                            prachtige muur mag komen!<br><hr>

                            Naam: Elco Mussert<hr>
                            Naam: Stephan Gordijn<hr>
                            Naam: Joris Wessels<hr>
                            Naam:<hr>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
