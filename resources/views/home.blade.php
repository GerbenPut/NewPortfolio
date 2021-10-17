@extends('layout.master')

@section('content')
    <!-- Header -->
    <!----Scroll omhoog!---->
    <header id="header" class="alt">
        <div class="logo"><a href="{{url('')}}">Portfolio <span>by GERBEN PUT</span></a></div>
        <a id="particletoggler" href="" class="button alt">Disable particles</a>
        <a href="#menu">Menu</a>
    </header>

    <!-- Banner -->
    <!----Scroll omhoog!---->
    <section class="banner full">
        <article>
            <div id="particles-js"></div>
            <!----Scroll omhoog!---->
            <!----Scroll omhoog!---->
            <!----Scroll omhoog!---->
            <img src="{{ asset('images/image1.jpg') }}" alt="slider1"/>
            <div class="inner">
                <header>
                    <p>A portfolio by <a href="{{ url('home') }}">GERBEN</a></p>
                    <h2 class="welcometext">Welcome</h2>
                </header>
            </div>
        </article>
        <article>
            <div id="particles-polygons"></div>
            <!----Scroll omhoog!---->
            <!----Scroll omhoog!---->
            <!----Scroll omhoog!---->
            <img src="{{ asset('images/image2.jpg') }}" alt=""/>
            <div class="inner">
                <header>
                    <p>Designer as a hobby</p>
                    <h2 class="welcometext">be creative</h2>
                </header>
            </div>
        </article>
        <article>
            <div id="particles-nasa"></div>
            <!----Scroll omhoog!---->
            <!----Scroll omhoog!---->
            <!----Scroll omhoog!---->

            <img src="{{ asset('images/image3.jpg') }}" alt=""/>
            <div class="inner">
                <header>
                    <p>Programmer</p>
                    <h2 class="welcometext">be efficient</h2>
                </header>
            </div>
        </article>
    </section>

    <!-- One -->
    <!----Scroll omhoog!---->
    <div class="nonmobilehomepage">
        <section id="one" class="wrapper style2">
            <div class="inner">
                <header data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="600"
                        class="align-center">
                    <p class="special">Wat kan je van mij verwachten?</p>
                    <h2>Mijn werk</h2><br>
                </header>
                <div class="grid-style">

                    <div data-aos="fade-right" data-aos-delay="400">
                        <div class="box">
                            <div class="image fit">
                                <img src="{{ asset('images/image4.png') }}" alt=""/>
                            </div>
                            <div class="content">
                                <header class="align-center">
                                    <p>Designer as a hobby</p>
                                    <h2>Be creative</h2>
                                </header>
                                <p> Ik heb gedesigned sinds dat ik 13 jaar oud ben. Ik heb gedesigned met Cinema4D wat
                                    een 3D design programma is. Daarnaast heb ik veel gewerkt met Adobe Photoshop en
                                    Illustrator om 2D designs te maken</p>
                                <footer class="align-center">
                                    <a href="{{ url('designs') }}" class="button alt">Designs</a>
                                </footer>
                            </div>
                        </div>
                    </div>

                    <div data-aos="fade-left" data-aos-delay="700">
                        <div class="box">
                            <div class="image fit">
                                <img src="{{ asset('images/image5.png') }}" alt=""/>
                            </div>
                            <div class="content">
                                <header class="align-center">
                                    <p>Programmer</p>
                                    <h2>Be efficient</h2>
                                </header>
                                <p>Ik programmeer sinds 2016 en heb mijn eerste studie (Applicatie en mediaontwikkeling
                                    MBO Niveau 4) afgerond. Nu ben ik bezig met mijn tweede studie namelijk HBO
                                    Informatica. Ook heb ik twee stages gelopen.</p>
                                <footer class="align-center">
                                    <a href="{{ url('websites') }}" class="button alt">Websites</a>
                                </footer>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Two -->
        <!----Scroll omhoog!---->
        <section id="two" class="wrapper style3">
            <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" class="inner" data-aos-delay="300">
                <header class="align-center">
                    <p>It Doesn’t Matter Where You Came From. All That Matters Is Where You Are Going.</p>
                    <h2>Brian Tracy</h2>
                </header>
            </div>
        </section>

        <!-- Three -->
        <!----Scroll omhoog!---->
        <section id="three" class="wrapper style2">
            <div class="inner">
                <header data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="600"
                        class="align-center">
                    <p class="special">Wil je meer weten?</p>
                    <h2>Over mij</h2>
                </header>
                <div data-aos="fade-right" data-aos-delay="900" class="gallery">
                    <h2>English</h2><br>
                    <p>Welcome! Nice that you are checking out my portfolio! My name is Gerben and I was born on
                        November 6, 1998. I
                        have
                        always been interested when it comes to computers. I have built my own computer and have
                        been
                        working
                        with design software for years. In addition I started a programming course in 2016. In the
                        meantime
                        I
                        have had two internships and have succesfully completed them. I have done my interships at
                        Coders
                        Academy and RoxMedia. Besides IT-related hobbies I am a sport addict! You can always find me
                        in
                        the
                        mountains during my holidays and in the gym when I am in the Netherlands! </p><br>
                </div>
                <div data-aos="fade-left" data-aos-delay="900" class="gallery ">
                    <h2>Nederlands</h2><br>
                    <p>Welkom! Leuk dat je een kijkje neemt op mijn portfolio! Ik ben Gerben en ik ben geboren op 6
                        november 1998. Ik ben
                        altijd
                        super geïnterresseerd geweest als het aan komt op computers. Ik heb onder anderen mijn eigen
                        computer
                        gebouwt en ben al jaren als hobby bezig met design software. Daarnaast ben ik in 2016
                        gestart
                        met
                        een
                        programmeer opleiding. In de tussentijd heb ik 2 stages gehad en heb deze met succes
                        afgerond.
                        Deze
                        stages heb ik gelopen bij Coders Academy en RoxMedia. Naast IT gerelateerde hobbies ben ik
                        een
                        echte
                        sport addict! Je kan me in vakanties altijd wel vinden in de bergen en in Nederland zie je
                        me
                        vaak
                        in de
                        sportschool!</p><br>
                </div>
            </div>
        </section>
    </div>

    <div class="mobilehomepage">
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
                                <img src="{{ asset('images/image4.png') }}" alt=""/>
                            </div>
                            <div class="content">
                                <header class="align-center">
                                    <p>Designer as a hobby</p>
                                    <h2>Be creative</h2>
                                </header>
                                <p> Ik heb gedesigned sinds dat ik 13 jaar oud ben. Ik heb gedesigned met Cinema4D wat
                                    een 3D design programma is. Daarnaast heb ik veel gewerkt met Adobe Photoshop en
                                    Illustrator om 2D designs te maken</p>
                                <footer class="align-center">
                                    <a href="{{ url('designs') }}" class="button alt">Designs</a>
                                </footer>
                            </div>
                        </div>
                    </div>

                    <div data-aos="fade-up" data-aos-delay="700">
                        <div class="box">
                            <div class="image fit">
                                <img src="{{ asset('images/image5.png') }}" alt=""/>
                            </div>
                            <div class="content">
                                <header class="align-center">
                                    <p>Programmer</p>
                                    <h2>Be efficient</h2>
                                </header>
                                <p>Ik programmeer sinds 2016 en heb mijn eerste studie (Applicatie en mediaontwikkeling
                                    MBO Niveau 4) afgerond. Nu ben ik bezig met mijn tweede studie namelijk HBO
                                    Informatica. Ook heb ik twee stages gelopen.</p>
                                <footer class="align-center">
                                    <a href="{{ url('websites') }}" class="button alt">Websites</a>
                                </footer>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Two -->
        <!----Scroll omhoog!---->
        <section id="two" class="wrapper style3">
            <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" class="inner" data-aos-delay="300">
                <header class="align-center">
                    <p>It Doesn’t Matter Where You Came From. All That Matters Is Where You Are Going.</p>
                    <h2>Brian Tracy</h2>
                </header>
            </div>
        </section>

        <!-- Three -->
        <!----Scroll omhoog!---->
        <section id="three" class="wrapper style2">
            <div class="inner">
                <header data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="600"
                        class="align-center">
                    <p class="special">Wil je meer weten?</p>
                    <h2>Over mij</h2>
                </header>
                <div data-aos="fade-up" data-aos-delay="900" class="gallery">
                    <h2>English</h2><br>
                    <p>Welcome! Nice that you are checking out my portfolio! My name is Gerben and I was born on
                        November 6, 1998. I
                        have
                        always been interested when it comes to computers. I have built my own computer and have
                        been
                        working
                        with design software for years. In addition I started a programming course in 2016. In the
                        meantime
                        I
                        have had two internships and have succesfully completed them. I have done my interships at
                        Coders
                        Academy and RoxMedia. Besides IT-related hobbies I am a sport addict! You can always find me
                        in
                        the
                        mountains during my holidays and in the gym when I am in the Netherlands! </p><br>
                </div>
                <div data-aos="fade-up" data-aos-delay="900" class="gallery">
                    <h2>Nederlands</h2><br>
                    <p>Welkom! Leuk dat je een kijkje neemt op mijn portfolio! Ik ben Gerben en ik ben geboren op 6
                        november 1998.
                        Ik ben altijd super geïnteresseerd geweest in alles wat met computers te maken heeft.
                        Ik heb onder andere mijn eigen computer gebouwd en ik ben al jaren als hobbyist bezig met
                        design
                        software.
                        Daarnaast startte ik in 2016 met een programmeeropleiding. In de tussentijd heb ik twee
                        stages
                        gedaan en heb deze met succes afgerond.
                        De stages deed ik bij de bedrijven Coders Academy en RoxMedia. Naast mijn IT gerelateerde
                        hobby's ben ik een echte sportaddict!
                        Je kan me tijdens vakanties altijd wel vinden in het hooggebergte en in Nederland zie je me
                        vaak
                        in de sportschool!</p><br>
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
    <script src="{{ asset('js/particles_home.js') }}"></script>
@endsection
