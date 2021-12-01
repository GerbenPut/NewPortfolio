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
                                <img class="stageimg" src="{{ asset('stagedocs/leerdoel1/3.PNG') }}" alt="slider1"/>
                                <p>Planning met uren</p>
                                <img class="stageimg" src="{{ asset('stagedocs/leerdoel1/1.PNG') }}" alt="slider1"/>
                                <p>Scrumboard</p>
                                <img class="stageimg" src="{{ asset('stagedocs/leerdoel1/2.PNG') }}" alt="slider1"/>
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
                                <img class="stageimg" src="{{ asset('stagedocs/leerdoel2/4.PNG') }}" alt="slider1"/>
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
                            <div class="formmargin2">
                                <h4>Leerdoel 4: Bewijs volgens Stageplan.</h4>
                                <p>Een document met een probleemstelling, oplossing en uitgewerkte deskresearch ter toelichting van mijn oplossing.</p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 4: Uiteindelijke bewijs.</h4>
                                <p>Het probleem lijkt makkelijk oplosbaar. Helaas blijkt dit in werkelijkheid anders. <br> Op het internet is nog niet veel documentatie te vinden over Azure Batch, een Microsoft Service om meerdere computers vanuit microsoft één of meer taken uit te laten voeren.</p>
                                <p>Ik heb een probleem en oplossing opgesteld hiervoor op de documentatie site van TXTOMEDIA. <br>Het probleem is omschreven als volgt: "Processing images and handling large processes when it comes to rendering cannot be done by simple functions since functions do not support such long processing times. This causes renders to fail and the final outcome will not be created."</p>
                                <p>Ofterwijl, het verwerken van afbeeldingen en het behandelen van grote taken kan niet gedaan worden door simpele functies in C#. Dit wegens de maximale tijd dat een functie mag duren volgens de C# richtlijnen. Hierdoor falen de uitkomsten van de taken die meegegeven worden.</p>
                                <p>Als oplossing hiervoor heb ik het volgende bedacht samen met mijn stagebegeleider Menno Bolt, wat ik ook uiteraard heb gedocumenteerd in de Wiki van TXTOMEDIA. </p>
                                <p>De oplossing is als volgt beschreven: "Azure Batch can be used for processing larger tasks. For instance rendering a 2D animated image in Blender and larger tasks in FFMPEG. Using the Azure Batch API will allow a C# code to run Azure Batch services with async methods, so they will finish successfully."</p>
                                <p>Azure Batch kan worden gebruikt voor het renderen van bijvoorbeeld een 2D geanimeerde afbeelding in Blender en grotere FFMPEG taken. Door middel van de Azure Batch API kan C# blijven runnen door het uitvoeren van de Azure Batch functies. Op deze manier worden de taken succesvol uitgevoerd.</p>
                                <p>Ik heb hierna veel onderzoek gedaan om mijn collega's zo goed mogelijk te kunnen informeren. Ik heb onderandere UML's geschreven voor het verduidelijken hoe de code met Azure Batch kan communiceren.</p>
                                <p>Daarbij heb ik om de twee weken via Teams uitgelegd hoe alles werkt om zo mijn kennis over te brengen in het bedrijf.</p>
                                <p>Hieronder staan enkele afbeeldingen waar ik mee aan wil tonen hoe ik het heb overgebracht naar het bedrijf.</p>
                                <br><br>
                                <img class="stageimg" src="{{ asset('stagedocs/leerdoel4/1.PNG') }}" alt="slider1"/>
                                <p>Een sketch die laat zien hoe bestanden gemaakt voor Dyad, Blender en FFMPEG via Fresca (de hoofdapplicatie) naar Azure Batch worden overgeplaatst doormiddel van de Management App.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/leerdoel4/2.PNG') }}" alt="slider2"/>
                                <p>Een UML in helicopterzicht de applicatie laat zien. Dit laat voornamelijk de stroom zien in welke volgorde functies, wachtrijen en connecties plaatsvinden.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/leerdoel4/3.PNG') }}" alt="slider3"/>
                                <p>Een UML om alle modellen (Dyad, Blender en FFMPEG model) te weergeven en hoe de structuur van de code is. Dit is belangrijk voor de volgende programmeurs die met de code moeten werken.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/leerdoel4/4.PNG') }}" alt="slider4"/>
                                <p>Zoals te zien is heb ik ook alle methodes en belangrijke punten gedocumenteerd. Dit zodat de volgende volgende programmeurs die met de code moeten werken gemakkelijk de code op kunnen pakken</p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 4: Reflectie.</h4>
                                <p>Door het uitwerken van al bovenstaande documentatie denk ik goed na over mijn gemaakte code en hoe dit voor andere programmeurs zo duidelijk mogelijk gemaakt kan worden. Ik vind dit erg belangrijk omdat ik zelf vaak moeite heb om andermans code te snappen zonder enige documentatie. Ik zal dit zeker blijven doen bij mijn toekomstige werk om het gemakkelijker en efficienter te maken voor de volgende programmeurs.</p>
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
                                <h4>Leerdoel 7: Wat wil ik leren?</h4>
                                <p>Ik wil na afloop van mijn stage in staat zijn om het eindproduct van mijn stageopdracht te bouwen en beschikbaar te stellen wat zal voldoen aan het aansluiten bij het bestaande systeem, namelijk Fresca en Azure Batch.</p>
                                </br>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 4: Bewijs volgens Stageplan.</h4>
                                <p>Het tonen van de code in relatie met het ontwerp, een goed uitgewerkte documentatie en code snippets.</p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 7: Uiteindelijke bewijs.</h4>
                                <p>Het uitwerken van de code was een heel veel onderzoek. Ik liep tegen erg veel dingen aan doordat er weinig documentatie is over de code op het internet.</p>
                                <p>Ik begon mijn onderzoek door te kijken hoe de code kon communiceren met Azure Batch. Het eerste wat ik tegenkwam was de officiele documentatie over Azure Batch.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/leerdoel7/1.PNG') }}" alt="slider1"/>
                                <p>Ik begon met de tutorial te volgen. Hierin stond wat ik nodig had om mijn eerste connectie te kunnen maken.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/leerdoel7/2.PNG') }}" alt="slider1"/>
                                <p>De eerste connectie kreeg ik werkende door de volgende gegevens van Azure Batch in te voeren in de code en daarna doormiddel van de API een connectie te schrijven</p>
                                <img class="stageimg" src="{{ asset('stagedocs/leerdoel7/3.PNG') }}" alt="slider1"/>
                                <p>Zodra de connectie werkende was kon ik beginnen aan de basis. De basis was duidelijk gedocumenteerd in de Documentatie van Microsoft zelf. Zo leerde ik bijvoorbeeld hoe ik een pool kon maken.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/leerdoel7/4.PNG') }}" alt="slider1"/>
                                <p>Ik leerde hoe ik een job kon maken.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/leerdoel7/5.PNG') }}" alt="slider1"/>
                                <p>En ik leerde hoe ik een taak aan kon maken.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/leerdoel7/6.PNG') }}" alt="slider1"/>
                                <p>Het ergste leek achter de rug. Maar wanneer alles goed blijkt te gaan is het moment dat je helemaal vast komt te zitten.</p>
                                <p>Ik liep tegen meerdere dingen aan. Zo moest ik bijvoorbeeld automatisch software op de Pool installeren. De Pool moet schaalbaar zijn op de hoeveelheid taken die erin zitten, 1 node per taak, er moeten dus 5 nodes gemaakt worden voor 5 taken. Zijn deze taken klaar? Dan moeten de nodes weer weg om kosten te besparen. De job moet automatisch verwijderd worden evenals de containers die in gebruik waren door deze taak. Meerdere taken moeten tegelijk kunnen renderen. Een pool moet vantevoren aangemaakt worden om tijd te besparen. En zo zijn er nog wel meer dingen.</p>
                                <p>Elk extra element koste mij veel extra tijd en onderzoek. Hieronder laat ik in een paar afbeeldingen zien hoe ik sommige problemen heb opgelost en hoe ik deze code met documentatie schrijf voor de volgende programmeur die er mee moet werken.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/leerdoel7/7.PNG') }}" alt="slider1"/>
                                <p>Code met uitleg erbij wat elke methode doet.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/leerdoel7/8.PNG') }}" alt="slider1"/>
                                <p>Een formule die de Pool schaalbaar maakt voor de hoevelheid taken in de Pool.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/leerdoel7/9.PNG') }}" alt="slider1"/>
                                <p>Het instellen van de Pools. Zowel Windows als Debian hebben eigen variabelen die belangrijk zijn om mee te geven.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/leerdoel7/10.PNG') }}" alt="slider1"/>
                                <p>Een TriggerQueue die elk inkomend bericht vanuit Fresca doorstuurt naar de applicatie die ik geschreven heb.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/leerdoel7/11.PNG') }}" alt="slider1"/>
                                <p>Ook documenteer ik per functie en/of methode alle argumenten en een samenvatting van de methode.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/leerdoel7/11.PNG') }}" alt="slider1"/>
                                <p>Per geschreven functie en/of method documenteerd ik ook op de Wiki alle variabelen en doelen van de functie/method.</p>
                                <p></p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 7: Reflectie.</h4>
                                <p>Tijdens het schrijven van de code heb ik veel geleerd. API's zijn nu veel duidelijker voor mij en ook ben ik veel beter geworden in het onderzoeken van code.</p>
                                </br>
                            </div>
                            <div>
                                <h4>Leerdoel 8: Wat wil ik leren?</h4>
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
