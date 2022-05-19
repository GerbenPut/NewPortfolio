@extends('layout.master')

@section('content')
    <!-- Header -->
    <header id="header" class="alt">
        <div class="logo"><a href="{{url('')}}">Portfolio <span>by GERBEN PUT</span></a></div>
        <a id="particletoggler" href="" class="button alt">Disable particles</a>
        <a href="#menu">Menu</a>
    </header>

    <div class="mobile">
        <section class="banner full">
            <article>
                <img src="{{ asset('images/image1.jpg') }}" alt="slider1"/>
                <div class="inner">
                    <header>
                        <p>A portfolio by <a href="{{ url('') }}">GERBEN</a></p>
                        <h2 class="welcometext">Welcome</h2>
                    </header>
                </div>
            </article>
            <article>
                <img src="{{ asset('images/image2.jpg') }}" alt=""/>
                <div class="inner">
                    <header>
                        <p>Designer as a hobby</p>
                        <h2 class="welcometext">be creative</h2>
                    </header>
                </div>
            </article>
            <article>
                <img src="{{ asset('images/image3.jpg') }}" alt=""/>
                <div class="inner">
                    <header>
                        <p>Programmer</p>
                        <h2 class="welcometext">be efficient</h2>
                    </header>
                </div>
            </article>
        </section>
    </div>

    <!-- Banner -->
    <div class="snap snap-parallax">
        <div id="parallax">
            <section class="layer banner full layer2" data-depth="0.16">
                <article>
                    <div id="particles-polygons"></div>
                    <div id="particles-js"></div>
                    <img src="{{ asset('images/image2.jpg') }}" alt=""/>
                </article>
            </section>
            <div class="layer" data-depth="0.45">
                <object class="svg" data="{{ asset('csvs/1.svg') }}"> </object>
            </div>
            <div class="layer" data-depth="0.43">
                <object class="svg" data="{{ asset('csvs/2.svg') }}"> </object>
            </div>
            <div class="layer" data-depth="0.41">
                <object class="svg" data="{{ asset('csvs/3.svg') }}"> </object>
            </div>
            <div class="layer" data-depth="0.39">
                <object class="svg" data="{{ asset('csvs/4.svg') }}"> </object>
            </div>
            <div class="layer" data-depth="0.37">
                <object class="svg" data="{{ asset('csvs/5.svg') }}"> </object>
            </div>
            <div class="layer" data-depth="0.35">
                <object class="svg" data="{{ asset('csvs/6.svg') }}"> </object>
            </div>
            <div class="layer" data-depth="0.30">
                <object class="svgc1" data="{{ asset('csvs/c1.svg') }}"> </object>
            </div>
            <div class="layer" data-depth="0.32">
                <object class="svg" data="{{ asset('csvs/g1.svg') }}"> </object>
            </div>
            <div class="layer" data-depth="0.31">
                <object class="svg" data="{{ asset('csvs/g2.svg') }}"> </object>
            </div>
            <div class="layer" data-depth="0.26">
                <object class="svgc2" data="{{ asset('csvs/c2.svg') }}"> </object>
            </div>
            <div class="layer" data-depth="0">
                <object class="scroll" data="{{ asset('csvs/scroll.svg') }}"> </object>
            </div>
            <section class="layer banner2 full" data-depth="0.26">
                <article>
                    <div class="inner">
                        <header>
                            <p>A portfolio by <a href="{{ url('') }}">GERBEN</a></p>
                            <h2 class="welcometext">Welcome</h2>
                        </header>
                    </div>
                </article>
            </section>
        </div>
    </div>

    <!-- One -->
    <div class="snap">
        <section id="one" class="wrapper style2">
            <div class="inner">
                <header data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="600"
                        class="align-center">
                    <p class="special">Wat kan je van mij verwachten?</p>
                    <h2>Mijn werk</h2><br>
                </header>
                <div class="grid-style">

                    <div data-aos="fade-up" data-aos-delay="400">
                        <div class="box">
                            <div class="image fit">
                                <img src="{{ asset('images/couch3.jpg') }}" alt=""/>
                            </div>
                            <div class="content">
                                <header class="align-center">
                                    <p>Designer as a hobby</p>
                                    <h2>Be creative</h2>
                                </header>
                                <p>Designen is mijn passie! Sinds mijn dertiende design ik in mijn vrije tijd. Zo
                                    heb ik gewerkt met Cinema4D, Blender, Adobe Photoshop, Adobe Illustrator
                                    Adobe After Effects. Graag combineer ik het designen met het Programmeren
                                    bij het maken van websites en applicaties.
                                </p>
                                <footer class="align-center">
                                    <a href="{{ url('designs') }}" class="button alt">Designs</a>
                                </footer>
                            </div>
                        </div>
                    </div>

                    <div data-aos="fade-up" data-aos-delay="700">
                        <div class="box">
                            <div class="image fit">
                                <img src="{{ asset('images/portfolio.jpg') }}" alt=""/>
                            </div>
                            <div class="content">
                                <header class="align-center">
                                    <p>Programmer</p>
                                    <h2>Be efficient</h2>
                                </header>
                                <p>Programmeren doe ik sinds 2016. Zo heb ik mijn studie Applicatie en Mediaontwikkeling
                                    afgerond en volg ik nu de Informatica opleiding. Graag programmeer ik in de talen Python,
                                    C#, PHP, Bash en Javascript. Elke uitdaging is voor mij een puzzel die ik met plezier oplos!
                                </p>
                                <footer class="align-center">
                                    <a href="{{ url('websites') }}" class="button alt">Websites</a>
                                </footer>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <!-- Two -->
    <div class="snap">
        <section id="two" class="wrapper style3">
            <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" class="inner" data-aos-delay="300">
                <header class="align-center">
                    <p>It Doesn’t Matter Where You Came From. All That Matters Is Where You Are Going.</p>
                    <h2>Brian Tracy</h2>
                </header>
            </div>
        </section>

        <!-- Three -->
        <section id="three" class="wrapper style2">
            <div class="inner">
                <header data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="600"
                        class="align-center">
                    <p class="special">Wil je meer weten?</p>
                    <h2>Over mij</h2>
                </header>
                <div data-aos="fade-up" data-aos-delay="900" class="gallery">
                    <h2>English</h2><br>
                    <p>Welcome! Thank you for taking a look at my portfolio! My name is Gerben and I was born on November 6, 1998. 
                        I have always been very interested when it comes to computers. 
                        For instance, I have built my own computer and have been working with design software for years as a hobby. 
                        In addition, I started a programming course in 2016. 
                        In the meantime I have had 3 internships and have successfully completed them. 
                        Besides IT related hobbies I am a real sports addict! 
                        During holidays you can always find me in the mountains and in the Netherlands you often see me in the gym!</p><br>
                </div>
                <div data-aos="fade-up" data-aos-delay="900" class="gallery ">
                    <h2>Nederlands</h2><br>
                    <p>Welkom! Leuk dat je een kijkje neemt op mijn portfolio! Ik ben Gerben en ik ben geboren op 6 november 1998. 
                        Ik ben altijd super geïnterresseerd geweest als het aan komt op computers. 
                        Ik heb onder anderen mijn eigen computer gebouwt en ben al jaren als hobby bezig met design software. 
                        Daarnaast ben ik in 2016 gestart met een programmeer opleiding. In de tussentijd heb ik 3 stages gehad en heb deze met succes afgerond. 
                        Naast IT gerelateerde hobbies ben ik een echte sport addict! 
                        Je kan me in vakanties altijd wel vinden in de bergen en in Nederland zie je me vaak in de sportschool!</p><br>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('ids')
    <script>
        var ids = ['#particles-js', '#particles-polygons', '#particles-nasa'];
    </script>
@endsection


@section('scripts')
    <script src="{{ asset('js/jquery.parallax.js') }}"></script>
    <script src="{{ asset('js/particles_home.js') }}"></script>
    <script src="{{ asset('js/particles.js') }}" defer></script>
@endsection
