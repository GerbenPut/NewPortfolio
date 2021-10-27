@extends('layout.master')

@section('content')
    <header id="header" class="alt">
        <div class="logo"><a href="{{url('')}}">Portfolio <span>by GERBEN PUT</span></a></div>
        <a href="#menu">Menu</a>
    </header>

    <section class="banner full">
        <article>
            <img src="{{ asset('images/image1.jpg') }}" alt="slider1"/>
            <div class="inner">
                <header>
                    <p>A portfolio by <a href="{{ url('home') }}">GERBEN</a></p>
                    <h2 class="welcometext">Welcome</h2>
                </header>
            </div>
        </article>
        <article>
            <img src="{{ asset('images/image1.jpg') }}" alt="slider1"/>
            <div class="inner">
                <header>
                    <p>TXTOMEDIA</p>
                    <h2 class="welcometext">internship</h2>
                </header>
            </div>
        </article>
    </section>

    <div class="nonmobilehomepage">

        <section id="one" class="wrapper style2 fade-in one">
            <div class="inner2">
                <div data-aos="fade-up-right" data-aos-delay="700">
                    <div class="box">
                        <h3>Algemene informatie</h3>
                        <div class="formmargin">
                            <div class="formmargin2">
                                <h4>Naam:</h4><p>Gerben</p>
                                <h4>Studentnummer:</h4><p>0984460</p>
                                <h4>Contactgegevens:</h4><p>Stagiair: 06-40811593</p><p>Begeleider: -</p><p>TXTOMEDIA: 010 261 3375</p>
                                <h4>Start en Einddatum</h4><p>30 Augustus 2021 - 31 Januari 2022</p>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="two" class="wrapper style3">
            <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" class="inner" data-aos-delay="300">
                <header class="align-center">
                    <p>Plan van aanpak.</p>
                    <h2>Stageplan</h2>
                </header>
            </div>
        </section>

        <section id="one" class="wrapper style2 fade-in one">
            <div class="inner2">
                <div data-aos="fade-up-left" data-aos-delay="700">
                    <div class="box">
                        <h3>Stageplan 1</h3>
                        <div class="formmargin">
                            <p>In mijn stageplan (ook wel bekend als Plan van Aanpak) schrijf ik onderandere over mijn leerdoelen en competenties die ik wil behalen tijdens mijn stage. Ook vertel ik over het bedrijf, contactgegevens, feedback plus wat ik er mee gedaan heb en de globale planning.</p>
                            <a href="{{ asset('stagedocs/Stageplannen/PVA.docx') }}" download>
                                <p>Stageplan 1: PVA.docx</p>
                                <br>
                            </a>            
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="one" class="wrapper style2 fade-in one">
            <div class="inner2">
                <div data-aos="fade-up-right" data-aos-delay="700">
                    <div class="box">
                        <h3>Stageplan 2</h3>
                        <div class="formmargin">
                        <a href="{{ asset('stagedocs/Stageplannen/PVA.docx') }}" download>
                                <p>Stageplan 2: PVA.docx</p>
                                <br>
                            </a>   
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="two" class="wrapper style3">
            <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" class="inner" data-aos-delay="300">
                <header class="align-center">
                    <p>Wat ik wilde bereiken en hoe ik dit gedaan heb.</p>
                    <h2>Leerdoelen</h2>
                </header>
            </div>
        </section>
        <section id="two" class="wrapper style2">
            <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" class="inner" data-aos-delay="300">
            <header data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="600"
                        class="align-center">
                    <p class="special">Leerdoel 1</p>
                    <h2>Manage en Control</h2>
                </header>
            </div>
        </section>

        <section id="one" class="wrapper style2 fade-in one">
            <div class="inner2">
                <div data-aos="fade-up-right" data-aos-delay="700">
                    <div class="box">
                        <h3>Voorbereiding</h3>
                        <div class="formmargin">
                            <div class="formmargin2">
                                <h4>Wat is Manage en Control?</h4>
                                <p>Manage & control behelst het beheren, monitoren en optimaliseren van de ontwikkeling, ingebruikname en gebruik van ICT-systemen.</p>
                            </div>
                            <div class="formmargin2">
                                <br>
                                <h4>Leerdoel 1: Wat wil ik leren?</h4>
                                <p>Ik wil na afloop van mijn stage de opdracht van mijn stage duidelijk hebben uitgewerkt doormiddel van documentatie, zodat de opdrachtgever en de andere collega’s begrijpen hoe het eindproduct werkt en ze hiermee eventueel verder kunnen werken.</p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 1: Bewijs volgens Stageplan.</h4>
                                <p>Goedgekeurd stageplan, Planningen, Overzicht scrumboard</p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 1: Uiteindelijke bewijs.</h4>
                                <p>Goedkeuring Stageplan</p>
                                <img class="stageimg" src="{{ asset('stagedocs/leerdoel1/3.png') }}" alt="slider1"/>
                                <p>Planning met uren</p>
                                <img class="stageimg" src="{{ asset('stagedocs/leerdoel1/1.png') }}" alt="slider1"/>
                                <p>Scrumboard</p>
                                <img class="stageimg" src="{{ asset('stagedocs/leerdoel1/2.png') }}" alt="slider1"/>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 1: Reflectie.</h4>
                                <p>Het werken met een gestructueerde requirements lijst, een scrumboard en planningen helpen enorm bij de workflow. Het geeft je een goed beeld en veel rust als het aankomt op het moeten weten wanneer je taken af moeten zijn.</p>
                                </br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="two" class="wrapper style2">
            <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" class="inner" data-aos-delay="300">
            <header data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="600"
                        class="align-center">
                    <p class="special">Leerdoel 2-3</p>
                    <h2>Analyseren</h2>
                </header>
            </div>
        </section>

        <section id="one" class="wrapper style2 fade-in one">
            <div class="inner2">
                <div data-aos="fade-up-right" data-aos-delay="700">
                    <div class="box">
                        <h3>Voorbereiding</h3>
                        <div class="formmargin">
                            <div class="formmargin2">
                                <h4>Wat is Analyseren?</h4>
                                <p>Analyseren behelst het analyseren van processen, producten en informatiestromen in hun onderlinge samenhang en context.</p>
                            </div>
                            <div class="formmargin2">
                                <br>
                                <h4>Leerdoel 2: Wat wil ik leren?</h4>
                                <p>Ik wil na afloop van mijn stage in staat zijn om de requirements van mijn stageopdracht te analyseren. Na het opstellen van de requirements zal ik deze toepassen in de scrum en bij het bouwen van het eindproduct.</p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 2: Bewijs volgens Stageplan.</h4>
                                <p>Opgestelde requirements, Een Epic, User stories.</p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 2: Uiteindelijke bewijs.</h4>
                                <p>De gehele requirements lijst inclusief een Epic.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/leerdoel2/4.png') }}" alt="slider1"/>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 2: Reflectie.</h4>
                                <p>Door het opstellen van alle requirements is het voor zowel mij als voor het team duidelijk waar ik de aankomende tijd mee bezig ga zijn. Dit geeft een goed overzicht voor het Project Team.</p>
                                </br>
                            </div> 
                            <div class="formmargin2">
                                <!-- <p>TODO</p> -->
                                <h4>Leerdoel 3: Wat wil ik leren?</h4>
                                <p>Ik wil na afloop van mijn stage in staat zijn om het ontwerp en de structuur van een al bestaand component te formuleren en valideren, zodat de betrouwbaarheid van dit component verbeterd wordt.</p>
                                </br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="two" class="wrapper style2">
            <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" class="inner" data-aos-delay="300">
            <header data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="600"
                        class="align-center">
                    <p class="special">Leerdoel 4</p>
                    <h2>Adviseren</h2>
                </header>
            </div>
        </section>

        <section id="one" class="wrapper style2 fade-in one">
            <div class="inner2">
                <div data-aos="fade-up-right" data-aos-delay="700">
                    <div class="box">
                        <h3>Voorbereiding</h3>
                        <div class="formmargin">
                            <div class="formmargin2">
                                <h4>Wat is Adviseren?</h4>
                                <p>Adviseren behelst het adviseren over de inrichting van processen en/of informatie voor een nieuw te ontwikkelen, aan te schaffen of aan te passen bestaand ICT-systeem.</p>
                            </div>
                            <div class="formmargin2">
                                <br>
                                <h4>Leerdoel 4: Wat wil ik leren?</h4>
                                <p>Ik wil na afloop van mijn stage in staat zijn om de stakeholders van mijn stage opdracht te adviseren over het actuele probleem, namelijk het niet kunnen renderen van afbeeldingen in huidige code functies. Dit door deskresearch te doen.</p>
                                </br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="two" class="wrapper style2">
            <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" class="inner" data-aos-delay="300">
            <header data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="600"
                        class="align-center">
                    <p class="special">Leerdoel 5-6</p>
                    <h2>Ontwerpen</h2>
                </header>
            </div>
        </section>

        <section id="one" class="wrapper style2 fade-in one">
            <div class="inner2">
                <div data-aos="fade-up-right" data-aos-delay="700">
                    <div class="box">
                        <h3>Voorbereiding</h3>
                        <div class="formmargin">
                            <div class="formmargin2">
                                <h4>Wat is Ontwerpen?</h4>
                                <p>Ontwerpen behelst het ontwerpen van een (deel van een) ICT-systeem op basis van specificaties.</p>
                            </div>
                            <div class="formmargin2">
                                <br>
                                <h4>Leerdoel 5: Wat wil ik leren?</h4>
                                <p>Ik wil na afloop van mijn stage in staat zijn om een ontwerp op te stellen voor mijn stageopdracht, namelijk de applicatie die de rendertaken doorstuurt naar Azure Batch. Hierbij zal ik gebruik maken van bestaande libraries en bestaande API’s.</p>
                                </br>
                                <h4>Leerdoel 6: Wat wil ik leren?</h4>
                                <p>Ik wil na afloop mijn stage in staat zijn om een teststrategie en testplan op te stellen voor mijn eindproduct van mijn stage opdracht.</p>
                                </br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="two" class="wrapper style2">
            <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" class="inner" data-aos-delay="300">
            <header data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="600"
                        class="align-center">
                    <p class="special">Leerdoel 7-8</p>
                    <h2>Realiseren</h2>
                </header>
            </div>
        </section>

        <section id="one" class="wrapper style2 fade-in one">
            <div class="inner2">
                <div data-aos="fade-up-right" data-aos-delay="700">
                    <div class="box">
                        <h3>Voorbereiding</h3>
                        <div class="formmargin">
                            <div class="formmargin2">
                                <h4>Wat is Realiseren?</h4>
                                <p>Realiseren behelst het realiseren van een (deel van een) ICT-systeem op basis van een ontwerp.</p>
                            </div>
                            <div class="formmargin2">
                                <br>
                                <h4>Leerdoel 5: Wat wil ik leren?</h4>
                                <p>Ik wil na afloop van mijn stage in staat zijn om het eindproduct van mijn stageopdracht te bouwen en beschikbaar te stellen wat zal voldoen aan het aansluiten bij het bestaande systeem, namelijk Fresca en Azure Batch.</p>
                                </br>
                                <h4>Leerdoel 6: Wat wil ik leren?</h4>
                                <p>Ik wil na afloop van mijn stage in staat zijn om het eindproduct van mijn stageopdracht te testen, met aandacht voor security aspecten.</p>
                                </br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="two" class="wrapper style2">
            <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" class="inner" data-aos-delay="300">
            <header data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="600"
                        class="align-center">
                    <p class="special">Leerdoel 9-10</p>
                    <h2>Professional Skills</h2>
                </header>
            </div>
        </section>

        <section id="one" class="wrapper style2 fade-in one">
            <div class="inner2">
                <div data-aos="fade-up-right" data-aos-delay="700">
                    <div class="box">
                        <h3>Voorbereiding</h3>
                        <div class="formmargin">
                            <div class="formmargin2">
                                <h4>Wat zijn Professional Skills?</h4>
                                <p>-</p>
                            </div>
                            <div class="formmargin2">
                                <br>
                                <h4>Leerdoel 9: Wat wil ik leren?</h4>
                                <p>Ik wil na afloop van mijn stage in staat zijn om mijn werkzaamheden zelfstandig uit te voeren. Denk hierbij aan mijn oplossingsgerichtheid, motivatie, inspiratie, inzet en doorzettingsvermogen.</p>
                                </br>
                                <h4>Leerdoel 6: Wat wil ik leren?</h4>
                                <p>Ik wil na afloop van mijn stage in staat zijn om deel uit te kunnen maken van het team. Denk hierbij aan het volgen van de juiste procedures zoals Azure Devops, de SCRUM sprints en de meetings waar onder andere de daily standup onder valt. Hierin wil ik een actieve bijdrage kunnen leveren.</p>
                                </br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection