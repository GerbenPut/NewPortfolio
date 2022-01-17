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
                <h2>WEBSITES</h2>
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
                            <img src="{{ asset('images/portfolio.jpg') }}" alt=""/>
                        </div>
                        <a href="https://www.gerbenput.com"><h3>Portfolio</h3></a>
                        <blockquote>Dit is de website waarop u zich nu bevindt.
                            Deze website is gemaakt met HTML5, CSS3, PHP en Javascript. De website is gebouwd in Laravel
                            en het laat zien wat voor werk ik tot nu toe gemaakt heb!
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="one" class="wrapper style2">
        <div class="inner2 fade-in one">
            <div class="grid-style2">
                <div data-aos="fade-up" data-aos-delay="400">
                    <div class="box">
                        <div class="image fit">
                            <img src="{{ asset('images/ronin.png') }}" alt=""/>
                        </div>
                        <a href="https://sourceartz.com/ronin"><h3>Ronin</h3></a>
                        <blockquote>De website Ronin is een project dat ik in mijn vrije tijd heb gemaakt. Het is een Web Applicatie die doormiddel van een API
                            een connectie maakt met een mobiele app genaamd Line, waar mensen dingen in opschrijven die berekend en opgeslagen worden in een database.
                            De website is gemaakt in Laravel met PHP, Javascript, HTML5 en CSS3.
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="one" class="wrapper style2">
        <div class="inner2 fade-in one">
            <div class="grid-style2">
                <div data-aos="fade-up" data-aos-delay="400">
                    <div class="box">
                        <div class="image fit">
                            <img src="{{ asset('images/wessfun.jpg') }}" alt=""/>
                        </div>
                        <a href=""><h3>Wessfun</h3></a>
                        <blockquote>De website Wessfun is een schoolproject dat ik met mijn team heb gemaakt in de
                            tweede klas tijdens mijn eerste studie (MBO Niveau 4 Developer). Wessfun is bedoeld
                            om een foto of video te kunnen uploaden waar mensen vervolgens commentaar
                            op kunnen leveren. Deze foto's en video's zijn verdeeld in verschillende categorieën.
                            Als administrator kan je de foto's bewerken of verwijderen, commentaar verwijderen en
                            categorieën toevoegen.
                            De website is gemaakt in Laravel met PHP, Javascript, HTML5 en CSS3.
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
