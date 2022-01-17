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


    @if(session()->has('password'))
        <?php 
            if( session()->get('password') == '0984460' ) {
        ?>
    
    <link rel="stylesheet" href="{{asset('css/sidenav.css')}}">
    <div class="sidenav">
        <h3>Informatie</h3>
        <a href="#1">Algemene Informatie</a>
        <a href="#2">Stageplan</a>
        <h3>Manage en control</h3>
        <a href="#3">Leerdoel 1</a>
        <a href="#4">Leerdoel 2</a>
        <h3>Analyseren</h3>
        <a href="#5">Leerdoel 3</a>
        <h3>Adviseren</h3>
        <a href="#6">Leerdoel 4</a>
        <h3>Ontwerpen</h3>
        <a href="#7">Leerdoel 5</a>
        <a href="#8">Leerdoel 6</a>
        <h3>Realiseren</h3>
        <a href="#9">Leerdoel 7</a>
        <a href="#10">Leerdoel 8</a>
        <h3>Professional Skills</h3>
        <a href="#11">Leerdoel 9</a>
        <a href="#12">Leerdoel 10</a>
        <h3>Beoordeling</h3>
        <a href="#13">Beoordeling</a>
    </div>

    <div class="nonmobilehomepage">
        <section id="1" class="wrapper style2 fade-in one">
            <div class="inner2">
                <div data-aos="fade-up-right" data-aos-delay="700">
                    <div class="box">
                        <h3>Algemene informatie - Contact</h3>
                        <div class="formmargin">
                            <div class="formmargin2">
                                <h4>Naam:</h4><p>Gerben</p>
                                <h4>Studentnummer:</h4><p>0984460</p>
                                <h4>Contactgegevens:</h4><p>Stagiair: 06-40811593</p><p>TXTOMEDIA: 010 261 3375</p>
                                <h4>Start en Einddatum</h4><p>30 Augustus 2021 - 31 Januari 2022</p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <h3>Algemene informatie - Over TXTOMedia</h3>
                        <div class="formmargin">
                            <div class="formmargin2">
                                <p>Bij TXTOMedia werken ze in een projectteam van zowel hbo- als wo-professionals. Iedereen in het team heeft zijn eigen functies, waarbij ik in dit geval een backend programmeur ben. In de eerste weken van mijn stage zal ik niet in aanraking komen met klanten. Dit zal later in de stageperiode wel plaatsvinden waar nodig.</p>
                                <p>TXTOmedia levert software as a service waarmee bestaande instructie- en trainingsmaterialen automatisch omgezet worden naar video.  </p>
                                <p>TXTOmedia's Media Creation Management (MCM) maakt het mogelijk om bestaande instructies en trainingen automatisch om te zetten naar video. Teksten worden omgezet naar audio, illustraties bepalen het beeld of worden vervangen door videofragmenten. Dit alles gebeurt geheel automatisch en met het oog op hergebruik. Zo kunnen bijvoorbeeld dezelfde videofragmenten opnieuw gebruikt worden tussen verschillende videotitels, of voor dezelfde titel maar in verschillende talen. </p>
                                <p>Videocreatie gebeurt op een zeer traditionele en arbeidsintensieve wijze. Hergebruik en automatisering vinden nauwelijks plaats. TXTOmedia helpt met name internationale organisaties met veel instructie content (zoals handleidingen) om papieren gebruikers- en service handleidingen te vervangen door (online) video. Hetgeen grote hoeveelheden papier bespaart, en tevens (laaggeletterde) gebruikers op een passende wijze instructie geeft, in de taal van de gebruiker. </p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <h3>Algemene informatie - Inleiding stageopdracht</h3>
                        <div class="formmargin">
                            <div class="formmargin2">
                                <p>In mijn stage werk in aan een grote, belangrijke opdracht. Het bedrijf heeft momenteel als probleem dat het renderen van visuele beelden niet in codematige functies uitgevoerd kan worden omdat de functies een maximale uitvoertijd hebben van vijf minuten. Het renderen van deze visuele beelden moet dus extern uitgevoerd worden. Mijn taak is om een applicatie te schrijven die van de hoofdwebsite de bestanden en belangrijke informatie ontvangt en dat doorstuurt en klaarzet voor Azure Batch die het dan vervolgens moet uitvoeren. De applicatie moet de bestanden op de juiste manier versturen passend bij de juiste renderapplicatie en daarbij ook virtuele machines activeren om deze renderapplicaties uit te voeren.</p>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>

        <section id="2" class="wrapper style3">
            <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" class="inner" data-aos-delay="300">
                <header class="align-center">
                    <p>Plan van aanpak.</p>
                    <h2>Stageplan</h2>
                </header>
            </div>
        </section>

        <section class="wrapper style2 fade-in one">
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

        <section class="wrapper style3">
            <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" class="inner" data-aos-delay="300">
                <header class="align-center">
                    <p>Wat ik wilde bereiken en hoe ik dit gedaan heb.</p>
                    <h2>Leerdoelen</h2>
                </header>
            </div>
        </section>
        <section id="3" class="wrapper style2">
            <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" class="inner" data-aos-delay="300">
            <header data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="600"
                        class="align-center">
                    <p class="special">Leerdoel 1</p>
                    <h2>Manage en Control</h2>
                </header>
            </div>
        </section>

        <section class="wrapper style2 fade-in one">
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
                                <p>Ik wil na afloop van mijn stage de opdracht van mijn stage duidelijk hebben uitgewerkt door middel van documentatie, zodat de opdrachtgever en de andere collega's begrijpen hoe het eindproduct werkt en ze hiermee eventueel verder kunnen werken.</p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 1: Bewijs volgens Stageplan.</h4>
                                <p>Goedgekeurd stageplan, Planningen, Overzicht scrumboard</p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 1: Uiteindelijke bewijs.</h4>
                                <p>Goedkeuring Stageplan</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel1/3.PNG') }}" alt="slider1"/>
                                <p>Planning met uren</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel1/1.PNG') }}" alt="slider1"/>
                                <p>Scrumboard</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel1/2.PNG') }}" alt="slider1"/>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 1: Inzichten verkregen.</h4>
                                <p>Voor mij was Azure DevOps nog helemaal nieuw. Zo heb ik niet alleen geleerd met DevOps om te gaan, maar ook geleerd gestructureerder te werken en plannen.</p>
                                <p>De requirements zien er een stuk beter uit dan de requirements 'die ik voorheb heb gemaakt'. In het begin plande ik ook vaak teveel uren in een week, wat ik later niet meer gedaan heb, waardoor het werk wat ik af moest maken minder stressvol was en een stuk realistischer.</p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 1: Reflectie.</h4>
                                <p>Het werken met een gestructueerde requirementslijst, een scrumboard en planningen helpen enorm bij de workflow. Het geeft mij een goed beeld en veel rust als het aankomt op deadlines.</p>
                                
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 1: Feedback begeleider.</h4>
                                <p>Gerben heeft van begin af aan gedocumenteerd. In het begin wilde Gerben snel programmeren zonder onderzoek en hierover documenteren. Gerben heeft het goed opgepakt en past nu onderzoek toe voor hij gaat programmeren. Een verbeterpunt: Gerben kan nog iets beter zijn denkwijze documenteren, zodat andere programmeurs in de denkwijze verder kunnen werken.</p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 1: Reflectie op feedback.</h4>
                                <p>Ik ga zeker werken aan mijn denwijze in documentatie. Dit is een belangrijk punt wat niet vergeten mag worden.</p></br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="4" class="wrapper style2">
            <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" class="inner" data-aos-delay="300">
            <header data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="600"
                        class="align-center">
                    <p class="special">Leerdoel 2-3</p>
                    <h2>Analyseren</h2>
                </header>
            </div>
        </section>

        <section class="wrapper style2 fade-in one">
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
                                <p>De gehele requirementslijst inclusief een Epic.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel2/4.PNG') }}" alt="slider1"/>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 2: Inzichten verkregen.</h4>
                                <p>Ik liep met de requirements in het begin tegen veel dingen aan, onder andere het bedenken van de juiste requirements voor de volgende sprint.
                                    Vaak was het dan het geval dat ik bepaalde requirements miste om de gehele taak uit te kunnen voeren. Op den duur ging dat steeds beter en nu is het plannen van uren en taken veel makkelijker.
                                    Ik denk beter na over de taken die geschreven moeten worden en ik kan nieuwe requirements, voor de volgende sprint, beter achterhalen.
                                </p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 2: Reflectie.</h4>
                                <p>Door het opstellen van alle requirements is het voor zowel mij als voor het team duidelijk waar ik de aankomende tijd mee bezig ga zijn. Dit geeft een goed overzicht voor het Project Team.</p>
                                
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 2: Feedback begeleider.</h4>
                                <p>Gerben heeft voor hij begon aan zijn stageopdracht een requirementlijst opgesteld. Deze was uitgebreid met zowel een Epic als met kleinere User Story's. Ook heeft Gerben zowel Functionele als Non Functionele Requirements uitgewerkt, wat zeer goed is gevallen binnen het team. Gerben miste soms enkele Requirements en daar kwam hij tijdens het programmeren achter. Het kan verholpen worden door nog iets beter te onderzoeken.</p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 2: Reflectie op feedback.</h4>
                                <p>In de loop der tijd heb ik geleerd veel beter te onderzoeken. In het begin merkte ik vaak dat ik tijdens het programmeren nieuwe user-stories toe moest voegen. Dit gebeurt nog steeds een enkele keer maar gaat al een stuk beter.</p></br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="5" class="wrapper style2 fade-in one">
            <div class="inner2">
                <div data-aos="fade-up-right" data-aos-delay="700">
                    <div class="box">
                        <h3>Voorbereiding</h3>
                        <div class="formmargin">
                            <div class="formmargin2">
                                <h4>Leerdoel 3: Wat wil ik leren?</h4>
                                <p>Ik wil na afloop van mijn stage in staat zijn om het ontwerp en de structuur van een al bestaand component te formuleren en valideren, zodat de betrouwbaarheid van dit component verbeterd wordt.</p>
                                </br>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 3: Bewijs volgens Stageplan.</h4>
                                <p>Een document met uitleg over de structuur en werking van een bestaand component.</p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 3: Uiteindelijke bewijs.</h4>
                                <p>Ik heb ervoor gekozen om een stuk code te analyseren, formuleren en valideren. <br>
                                    Hiervoor heb ik een code gekozen die berichten moet uitdelen tussen de website van TXTOMedia en MPM.<br>
                                    Deze berichten updaten de Status in de MPM Database.<br>
                                    <br>
                                    Om dit te runnen moest ik een stukje code aanroepen genaamd IMpmFactory.SendStatusUpdate.<br>
                                    Om dit te kunnen runnen moet het enige informatie verkrijgen namelijk.<br>
                                    <br>
                                    De TitleId: Een ID van een title waar de status van moet veranderen in MPM.<br>
                                    De ProcessStatus: Een Enum van een MPM process status.<br>
                                    De URL: Optioneel, de url van een status die geüpdatet wordt in MPM.<br>
                                    De ProductionTitle: De productie titel van de video titel.<br>
                                    <br>
                                    Met deze informatie kan de code aan de slag. <br>
                                    <br>
                                    De methode haalt de titel uit de database en verzamelt informatie. Deze informatie wordt verwerkt in een nieuwe Model en deze wordt toegevoegd in de wachtrij (Een Azure Queue).<br>
                                    Voor het in de wachtrij gestopt wordt, moet het product geserialised worden (er wordt een lange string van gemaakt).<br>
                                    <br>
                                    Dit is vanuit de TXTOMedia kant. Aan de andere kant (MPM) is een functie geschreven die wacht op berichten uit de wachtrij.<br>
                                    Zo blijft MPM kijken of er een bericht binnenkomt. Zo zoekt MPM in de wachtrij op de TitleID en kijkt of hij een overeenkomstige TitleID vindt in zijn eigen database.<br>
                                    Als dit het geval is update MPM de TitleID in de database.
                                    <br>
                                    Gaat er iets mis tijdens het exporteren van de informatie bij de wachtrij die hierboven beschreven is? Dan wordt deze informatie doorgestuurd naar de Gifwachtrij (PoisonQueue).<br>
                                    Dit is een wachtrij waar alle mislukte Models met informatie in worden opgeslagen. Om deze opnieuw op te vragen moet de IVideoTitleStatusService.TriggerPoisonQueue() in MPM aangeroepen worden.<br>
                                    Bij het oproepen wordt de informatie teruggestuurd naar de normale wachtrij en wordt het proces herhaald.<br>
                                </p>
                                <p>De code structuur van de boven beschreven code.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel3/1.png') }}" alt="slider1"/>
                                <p>De structuur van MPM</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel3/2.png') }}" alt="slider1"/>
                                <p>De structuur van TXTOMedia.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel3/3.png') }}" alt="slider1"/>
                                <p>De structuur van de database en wachtrijen.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel3/4.png') }}" alt="slider1"/>
                                <p>Een model die meegegeven wordt in de wachtrijen.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel3/5.png') }}" alt="slider1"/>
                                <p>Een stuk code die de Model in de wachtrij stopt.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel3/6.png') }}" alt="slider1"/>
                                <p>Een stuk code die de Model uit de wachtrij haalt.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel3/7.png') }}" alt="slider1"/>
                                <p>Status voor het runnen van de code.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel3/9.png') }}" alt="slider1"/>
                                <p>Status na het runnen van de code.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel3/8.png') }}" alt="slider1"/>
                                <p>Status code uitleg.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel3/10.png') }}" alt="slider1"/>
                                <p>Bericht in de wachtrij.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel3/11.png') }}" alt="slider1"/>
                                
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 3: Inzichten verkregen.</h4>
                                <p>Ik heb geleerd hoe ik een structuur vanuit een afbeelding kan lezen. Een kijkje nemen en denken zoals de persoon die het gemaakt heeft is lastig. 
                                    Daarom is het uitermate belangrijk dat je elkaars code bekijkt en er een analyse en/of validatie op los laat. Dit helpt zowel jou als de huidige programmeur met het verbeten van de code.
                                </p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 3: Reflectie.</h4>
                                <p>Door het valideren van andermans code krijg je een andere kijk op de code. Dit omdat je moet denken zoals de programmeur het origineel geschreven heeft.
                                    Ik zal eerder mijn code laten nakijken door andere programmeurs nu ik dit gedaan heb, zodat ik er zeker van kan zijn dat de code goed functioneert en duidelijk is voor andere programmeurs.
                                    Het valideren van code heb ik als een goede oefening ervaren.
                                </p>
                                
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 3: Feedback begeleider.</h4>
                                <p>Gerben heeft een product van een van zijn collega's gevalideerd. Hij heeft hiervoor de documentatie van de Wiki gebruikt en hij heeft kritisch gekeken naar het product. Ook heeft Gerben contact gezocht met de collega die het gevalideerde product geschreven had om een terugkoppeling te geven.</p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 3: Reflectie op feedback.</h4>
                                <p>Ik ben blij dat dit goed bevallen is!</p></br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="6" class="wrapper style2">
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
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel4/1.PNG') }}" alt="slider1"/>
                                <p>Een sketch die laat zien hoe bestanden gemaakt voor Dyad, Blender en FFMPEG via Fresca (de hoofdapplicatie) naar Azure Batch worden overgeplaatst door middel van de Management App.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel4/2.PNG') }}" alt="slider2"/>
                                <p>Een UML in helicopterzicht die de applicatie laat zien. Dit laat voornamelijk de stroom zien in welke volgorde functies, wachtrijen en connecties plaatsvinden.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel4/3.PNG') }}" alt="slider3"/>
                                <p>Een UML om alle modellen (Dyad, Blender en FFMPEG model) weer te geven en hoe de structuur van de code is. Dit is belangrijk voor de volgende programmeurs die met de code moeten werken.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel4/4.PNG') }}" alt="slider4"/>
                                <p>Zoals te zien is heb ik ook alle methodes en belangrijke punten gedocumenteerd. Dit zodat de volgende volgende programmeurs die met de code moeten werken gemakkelijk de code op kunnen pakken</p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 4: Inzichten verkregen.</h4>
                                <p>Door het adviseren aan mijn collega's kreeg ik vragen. Vragen die ik van te voren had kunnen beantwoorden die voor mij logisch waren.
                                    Door te adviseren ben ik beter gaan nadenken over mijn denkwijze en hoe ik deze over kan brengen in mijn code. Ook heb ik extra stukken geschreven op de wiki over hoe ik mijn eigen code voor ogen zie en hoe ik de werkwijze bedoeld heb.
                                </p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel4/5.PNG') }}" alt="slider4"/>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 4: Reflectie.</h4>
                                <p>Het uitwerken van mijn eigen code voelde heel nuttig. Ik ben tot besef gekomen hoe belangrijk het is, voornamelijk omdat ik ook andermans code moest valideren. Dit is erg moeilijk zonder inzicht en structuur over de code. 
                                    Ook al is het niet het leukste werk zal ik het meenemen en gebruiken in de toekomst bij het schrijven van code.
                                </p>
                                </br>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 4: Feedback begeleider.</h4>
                                <p>Gerben heeft op de Wiki zowel de probleemstelling als de oplossing uitgewerkt. Hij heeft ons meer dan voldoende ingelicht over zijn werk en heeft het tevens in de Sprint Demo's uitgebreid laten zien. Zijn code is goed gedocumenteerd. Gerben zou nog iets meer onderzoek kunnen doen naar belangrijke informatie voor het bedrijf, bijvoorbeeld de maandelijkse kosten die zijn product mee zullen brengen.</p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 4: Reflectie op feedback.</h4>
                                <p>Vaak was ik bezig met het onderzoeken naar oplossingen voor mijn eigen code. Ik sta er dan niet bij stil dat er ook details zijn die voor de andere mensen uit het scrumteam belangrijk zijn. Ik zal dit zeker meenemen, ook zal ik mensen meer betrekken bij wat voor hen belangrijk is als zij stakeholders zijn voor mijn product.</p></br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="7" class="wrapper style2">
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
                                <p>Ik wil na afloop van mijn stage in staat zijn om een ontwerp op te stellen voor mijn stageopdracht, namelijk de applicatie die de rendertaken doorstuurt naar Azure Batch. Hierbij zal ik gebruik maken van bestaande libraries en bestaande API's.</p>
                                </br>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 5: Bewijs volgens Stageplan.</h4>
                                <p>Door middel van een structuuruitleg, schets, en eventuele diagrammen zoals een UML diagram.</p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 5: Uiteindelijke bewijs.</h4>
                                <p>Let op. Dit is een herhaling van leerdoel 4. Echter was het te relevate informatie om er uit te laten bij leerdoel 4.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel4/1.PNG') }}" alt="slider1"/>
                                <p>Een sketch die laat zien hoe bestanden gemaakt voor Dyad, Blender en FFMPEG via Fresca (de hoofdapplicatie) naar Azure Batch worden overgeplaatst door middel van de Management App.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel4/2.PNG') }}" alt="slider2"/>
                                <p>Een UML in helicopterzicht die de applicatie laat zien. Dit laat voornamelijk de stroom zien in welke volgorde functies, wachtrijen en connecties plaatsvinden.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel4/3.PNG') }}" alt="slider3"/>
                                <p>Een UML om alle modellen (Dyad, Blender en FFMPEG model) weer te geven en hoe de structuur van de code is. Dit is belangrijk voor de volgende programmeurs die met de code moeten werken.</p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 5: Inzichten verkregen.</h4>
                                <p>Ik heb geleerd goed vooruit te denken en te onderzoeken op het internet hoe ik stukken code moet schrijven zonder het al te programmeren.
                                Het zorgt ervoor dat je goede code schrijft en extra lang nadenkt over de structuur van de code.</p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 5: Reflectie.</h4>
                                <p>Het kost best wat moeite om alle ontwerpen te schrijven. Het gaf me wel een beter beeld tijdens het programmeren wat erg hielp</p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 5: Feedback begeleider.</h4>
                                <p>Gerben heeft uit zichzelf twee diagrammen gemaakt voor zijn product. De diagrammen misten een paar stukjes vanuit de Fresca kant. Gerben zou eventueel iets beter de applicaties die met zijn product in aanraking komen kunnen onderzoeken. Al met al heeft hij het zeer netjes opgesteld.</p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 5: Reflectie op feedback.</h4>
                                <p>Bij het opstellen van de ontwerpen heb ik meerdere versies gehad. Dit kwam voornamelijk omdat ik niet genoeg onderzoek deed naar de structuur van de applicaties die communiceren met mijn product. Ik heb de Models vaak herschreven na feedback te krijgen van de stakeholders van het product.
                                    Wanneer ik nu programmeer let ik veel meer op de producten die samenhangen met mijn product, ook zal ik het zeker meenemen in de toekomst wanneer ik een geheel nieuw ontwerp moet maken.
                                </p><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="8" class="wrapper style2 fade-in one">
            <div class="inner2">
                <div data-aos="fade-up-right" data-aos-delay="700">
                    <div class="box">
                        <h3>Voorbereiding</h3>
                        <div class="formmargin">
                            <div class="formmargin2">
                                <h4>Leerdoel 6: Wat wil ik leren?</h4>
                                <p>Ik wil na afloop mijn stage in staat zijn om een teststrategie en testplan op te stellen voor mijn eindproduct van mijn stage opdracht.</p>
                                </br>
                            </div>  
                            <div class="formmargin2">
                                <h4>Leerdoel 6: Bewijs volgens Stageplan.</h4>
                                <p>Een document met mijn teststrategieën en mijn testplan.</p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 6: Uiteindelijke bewijs.</h4>
                                <p>De teststrategieën zijn uitgewerkt en beschreven in leerdoel 8. Deze is uiteraard ook op de Wiki van TXTOMEDIA geplaatst.</p>
                            </div>
                            <div class="formmargin">
                                <a href="{{ asset('stagedocs/Leerdoel6/strategie.docx') }}" download>
                                    <p>Test strategie.docx</p>
                                </a>
                            </div>
                                
                            <div class="formmargin2">
                                <p>Allereerst heb ik nagedacht over wat ik exact moet testen en wat niet. Dit heb ik ook geformuleerd. Dit is terug te lezen in het Word-document onder het tabje "Scopes" en "Not to be Tested".</p>
                                <p>Daarna ben ik gaan onderzoeken welke testtechnieken er zijn. Er spraken mij er twee aan, User Testing en Unit Testing. Ik heb op dit huidige moment alleen nog maar aan User Testing gedaan. Aan het einde van mijn stage zal ik eventueel ook nog Unit Testen mits dit van belang is.</p>
                                <p>In het bestand heb ik ook beschreven wat User Testing en Unit Testing inhouden. En ik heb twee tabellen gemaakt voor de stappenplannen en user tests.</p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 6: Inzichten verkregen.</h4>
                                <p>Door het onderzoeken heb ik meerdere teststrategieën gevonden en heb daar veel van geleerd. Ookal vond ik dat Unit Testing de beste teststrategie was, de beste teststrategie was, was dit na het bespreken met een collega geen optie op dit moment. In een latere scope zou dit mogelijk worden. Daarom heb ik nu voor user-testing gekozen.
                                </p>
                            </div>
                            <div class="formmargin2">
                                <br>
                                <h4>Leerdoel 6: Reflectie.</h4>
                                <p>Tijdens het uitzoeken van de juiste testmethode voor mijn product kreeg ik een andere kijk op mijn code. Zo heb ik geleerd te denken als een gebruiker die niet begrijpt hoe de code gemaakt is, namelijk met een plan erachter. </p>    
                                <p>Testen zal mij erg helpen bij het opsporen van fouten en bij gebruiksvriendelijkheid. </p>
                                
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 6: Feedback begeleider.</h4>
                                <p>Gerben heeft testen geschreven en deze gedeeld met het team. De testen hebben een duidelijke uitleg en het bestand is goed klaargezet voor gebruik.</p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 6: Reflectie op feedback.</h4>
                                <p>Het is fijn dat het goed bevallen is!</p></br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="9" class="wrapper style2">
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
                                <h4>Leerdoel 7: Bewijs volgens Stageplan.</h4>
                                <p>Het tonen van de code in relatie met het ontwerp, een goed uitgewerkte documentatie en code snippets.</p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 7: Uiteindelijke bewijs.</h4>
                                <p>Het uitwerken van de code was veel onderzoek doen. Ik liep tegen erg veel dingen aan doordat er weinig documentatie is over de code op het internet.</p>
                                <p>Ik begon mijn onderzoek door te kijken hoe de code kon communiceren met Azure Batch. Het eerste wat ik tegenkwam was de officiële documentatie over Azure Batch.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel7/1.PNG') }}" alt="slider1"/>
                                <p>Ik begon met de tutorial te volgen. Hierin stond wat ik nodig had om mijn eerste connectie te kunnen maken.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel7/2.PNG') }}" alt="slider1"/>
                                <p>De eerste connectie kreeg ik werkende door de volgende gegevens van Azure Batch in te voeren in de code en daarna door middel van de API een connectie te schrijven</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel7/3.PNG') }}" alt="slider1"/>
                                <p>Zodra de connectie werkende was kon ik beginnen aan de basis. De basis was duidelijk gedocumenteerd in de Documentatie van Microsoft zelf. Zo leerde ik bijvoorbeeld hoe ik een pool kon maken.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel7/4.PNG') }}" alt="slider1"/>
                                <p>Ik leerde hoe ik een job kon maken.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel7/5.PNG') }}" alt="slider1"/>
                                <p>En ik leerde hoe ik een taak aan kon maken.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel7/6.PNG') }}" alt="slider1"/>
                                <p>Het ergste leek achter de rug. Maar wanneer alles goed blijkt te gaan is het moment dat je helemaal vast komt te zitten.</p>
                                <p>Ik liep tegen meerdere dingen aan. Zo moest ik bijvoorbeeld automatisch software op de Pool installeren. De Pool moet schaalbaar zijn op de hoeveelheid taken die erin zitten, één node per taak, er moeten dus vijf nodes gemaakt worden voor 5 taken. Zijn deze taken klaar? Dan moeten de nodes weer weg om kosten te besparen. De job moet automatisch verwijderd worden evenals de containers die in gebruik waren door deze taak. Meerdere taken moeten tegelijk kunnen renderen. Een pool moet van tevoren aangemaakt worden om tijd te besparen. En zo zijn er nog wel meer dingen.</p>
                                <p>Elk extra element koste mij veel extra tijd en onderzoek. Hieronder laat ik in een paar afbeeldingen zien hoe ik sommige problemen heb opgelost en hoe ik deze code in de documentatie schrijf voor de volgende programmeur die er mee moet werken.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel7/7.PNG') }}" alt="slider1"/>
                                <p>Code met uitleg erbij wat elke methode doet.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel7/8.PNG') }}" alt="slider1"/>
                                <p>Een formule die de Pool schaalbaar maakt voor de hoevelheid taken in de Pool.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel7/9.PNG') }}" alt="slider1"/>
                                <p>Het instellen van de Pools. Zowel Windows als Debian hebben eigen variabelen die belangrijk zijn om mee te geven.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel7/10.PNG') }}" alt="slider1"/>
                                <p>Een TriggerQueue die elk inkomend bericht vanuit Fresca doorstuurt naar de applicatie die ik geschreven heb.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel7/11.PNG') }}" alt="slider1"/>
                                <p>Ook documenteer ik per Functie en/of Method alle argumenten en een samenvatting van de methode.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel7/11.PNG') }}" alt="slider1"/>
                                <p>Per geschreven Functie en/of Method documenteer ik ook op de Wiki alle variabelen en doelen van de functie/method.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel7/13.png') }}" alt="slider1"/>
                                <p>Fragment van gerenderde video.</p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 7: Inzichten verkregen.</h4>
                                <p>Bij dit onderdeel heb ik het meeste geleerd van al mijn leerdoelen. Zo heb ik geleerd hoe ik met een API moet werken, hoe ik door middel van Microsoft documentaties mijn code beter kan schrijven, hoe ik het beste kan onderzoeken waar ik mijn informatie vandaan kan halen enz.
                                    Het bouwen en schrijven van code ging niet altijd goed en koste veel extra werk. Ik heb geleerd hier rekening mee te houden tijdens het plannen van mijn volgende sprint.
                                </p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 7: Reflectie.</h4>
                                <p>Tijdens het schrijven van de code heb ik veel geleerd. API's zijn nu veel duidelijker voor mij en ook ben ik veel beter geworden in het onderzoeken van code.</p>
                                
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 7: Feedback begeleider.</h4>
                                <p>Gerben heeft een goed product gemaakt en heeft documentatie in zijn code gebruikt, wat het overzichtelijk en duidelijk maakt. Ook heeft Gerben een goede structuur gemaakt voor de bestanden van zijn product. Een enkele keer begreep Gerben de code niet. In het begin van de stageperiode vroeg Gerben ietwat snel naar een oplossing. Door Gerben op het goede pad te helpen, is hij steeds beter zijn werk gaan onderzoeken voor het stellen van een vraag. Een goede terugkoppeling is het gebruik maken van een bestand met daarin alle gevoelige informatie.</p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 7: Reflectie op feedback.</h4>
                                <p>Ik merk dat ik erg vooruit ben gegaan op het kunnen vinden van oplossingen zonder hulp. Het zoeken naar antwoorden wordt steeds makkelijker.
                                    Qua terugkoppeling, momenteel is er nog geen bestand hiervoor en daarom kreeg ik hier feedback op. Ik ben nu meer gaan letten op de veiligheid van code zodat dit beter beschermt wordt tegen hackers. Ik neem dit mee voor mijn toekomstige werk en pas dit toe in de laaste weken van mijn stage.
                                </p></br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="10" class="wrapper style2 fade-in one">
            <div class="inner2">
                <div data-aos="fade-up-right" data-aos-delay="700">
                    <div class="box">
                        <h3>Voorbereiding</h3>
                        <div class="formmargin">
                            <div class="formmargin2">
                                <h4>Leerdoel 8: Wat wil ik leren?</h4>
                                <p>Ik wil na afloop van mijn stage in staat zijn om het eindproduct van mijn stageopdracht te testen, met aandacht voor security aspecten.</p>
                            </div>
                            <div class="formmargin2">
                                <p>Per uitgevoerde user test heb ik beschreven of de test goed uitgevoerd wordt of niet. Ik liep uiteraard tegen bepaalde bugs aan die ik vervolgens heb opgelost en opnieuw heb getest.</p>
                                <p>Ook zijn de tests later nog uitgevoerd door een collega om er zeker van te zijn dat alles klopte.</p><br>
                                <p>Qua vlak op security is er in de code erg goed gelet op het verbergen van de gegevensinformatie. Dit om het zo veilig mogelijk te houden. Ik heb gebruik gemaakt van de appsettings.json waar variabelen in staan die alleen door het project uitgelezen mogen worden.</p>
                                <p>Daarbij komt ook kijken dat Azure Batch erg goed beveiligd is vanuit Microsoft zelf. Zo heb ik functies en stukken code moeten schrijven om gemachtigd te zijn om bij de bestanden en opslag van Azure Batch te komen.</p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 8: Bewijs volgens Stageplan.</h4>
                                <p>Een document met mijn uitgevoerde testen.</p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 8: Uiteindelijke bewijs.</h4>
                            </div>
                            <div class="formmargin2">
                            <a href="{{ asset('stagedocs/Leerdoel8/testplan.docx') }}" download>
                                    <p>Uitgewerkte tests.docx</p>
                                    <br>
                                </a>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 8: Inzichten verkregen.</h4>
                                <p>Het belangrijkste wat ik geleerd heb naast de verschillende testmethodieken uitvoeren is hoe belangrijk het testen is.
                                    Vooral omdat meerdere mensen het kunnen testen en je hierdoor fouten vindt die anders achter blijven.  </p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 8: Reflectie.</h4>
                                <p>Door het testen krijg je een veel beter beeld van hoe een gemiddelde gebruiker er naar kijkt. Ook spot je de fouten sneller die je tijdens het programmeren over het hoofd ziet. Omdat een collega de tests ook heeft uitgevoerd die met andere inzichten de code test, kom je achter fouten die je anders niet had gevonden.</p>
                                <p>Het testen beschouw ik als een goed leerpunt om mee te nemen in producten die ik later ga maken.</p><br>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 8: Feedback begeleider.</h4>
                                <p>De testen die Gerben zelf heeft uitgevoerd, zijn goed behandeld en verwerkt. Gerben heeft netjes de stappen beschreven per test en ook welke testen foutloos zijn uitgevoerd. Gerben kan tijdens zijn volgende product onderzoek doen naar unit tests. Het zal helpen met het nog beter valideren van de geschreven code.</p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 8: Reflectie op feedback.</h4>
                                <p>Door het testen ben ik mijn eigen code nog beter gaan begrijpen en ik kijk er naar uit om het Unit Testen te gebruiken bij mijn volgende product. Het ziet er veelbelovend uit en ik neem dit zeker mee!</p>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="11" class="wrapper style2">
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
                                <br>
                                <h4>Leerdoel 9: Wat wil ik leren?</h4>
                                <p>Ik wil na afloop van mijn stage in staat zijn om mijn werkzaamheden zelfstandig uit te voeren. Denk hierbij aan mijn oplossingsgerichtheid, motivatie, inspiratie, inzet en doorzettingsvermogen.</p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 9: Bewijs volgens Stageplan.</h4>
                                <p>Maandelijkse feedback rapport en eventuele mail en chat uitwisselingen.</p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 9: Uiteindelijke bewijs.</h4>
                                <p>Het uiteindelijke bewijs is erg anders dan ik had verwacht. Ik kan goed laten zien dat ik zelfstandig heb gewerkt en oplossingsgericht, gemotiveerd, geïnspireerd ben geweest. Ook heb ik goed doorgezet wanneer het niet meezat zoals in eerdere leerdoelen naar voren is gekomen.
                                    Tijdens de stage heb ik geprobeerd zoveel mogelijk te documenteren en te onderzoeken. Dit ging niet altijd gemakkelijk omdat er weinig documentatie te vinden is op het internet over bijvoorbeeld het gebruik van de Azure Batch API.
                                    Hiervoor heb ik mijn belangrijke onderzoek ook gedocumenteerd om het makkelijker te maken voor de volgende programmeur die hier mee aan de slag gaat.
                                </p>
                                <p>Het uitzoeken en begrijpen van Azure Batch kostte mij veel tijd. Ik documenteerde onder andere hoe ik een account aan moest maken en moest koppelen.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel9/1.PNG') }}" alt="slider1"/>
                                <p>Ik onderzocht hoe ik software automatisch kon installeren op een Batch Pool.
                                    Hierbij liep ik tegen veel aan. Onder andere dat je niet zomaar op een Debian (UNIX) server software kon installeren door middel van de tool weergeven in de afbeelding hieronder.
                                    Hiervoor moest ik code schrijven die dit deed door middel van een connectie waarbij bij het opstarten van de Pool automatisch de software wordt geinstalleerd.
                                </p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel9/2.PNG') }}" alt="slider1"/>
                                <p>Onderzoek wat ik deed wat belangrijk is voor de volgende programmeur heb ik genoteerd in de Wiki.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel9/3.PNG') }}" alt="slider1"/>
                                <p>Bijna alle code die ik geschreven heb is zelfstandig geweest. Dit zorgt ervoor dat het belangrijk is het goed over te brengen in het team. Hiervoor heb ik al mijn code uitgelegd zowel in de code zelf als in de wiki.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel9/4.PNG') }}" alt="slider1"/>
                                <p>Ik heb mijn eigen branch aangemaakt om in te werken. Dit zodat het geen problemen veroorzaakt met code die mijn collega's schrijven</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel9/5.PNG') }}" alt="slider1"/>
                                <p>Ik update en push mijn code regelmatig om het netjes bij te houden.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel9/6.PNG') }}" alt="slider1"/>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 9: Inzichten verkregen.</h4>
                                <p>In het begin van mijn stage wilde ik nog wel eens wat vaker en sneller vragen stellen. Dit zorgt ervoor dat ik soms mijn collega's van het werk af hou. Ik heb geleerd een stuk zelfstandiger te zijn en ben
                                    daardoor langer door gaan zetten om mijn antwoorden alsnog te vinden door onderzoek wat ik doe op het internet en het proberen van andere oplossingen bij het schrijven van code.
                                </p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 9: Reflectie.</h4>
                                <p>Ik ben zowel op het werk als buiten werk om zelfstandiger geworden bij het zoeken naar antwoorden. Mijn stagebegeleider heeft me goed geholpen in het doorzetten en in plaats van het geven van antwoorden gaf hij mij hints om
                                    zelf tot een antwoord te kunnen komen. Dit heb ik als erg fijn ervaren en het heeft me geholpen in het onderzoeken.
                                </p>
                                
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 9: Feedback begeleider.</h4>
                                <p>Gerben is super gemotiveerd en hij wilde vanaf dag één gelijk aan de slag gaan met programmeren. Gerben kwam er al snel achter dat hij eerst veel onderzoek moest doen voor het programmeren. Gerben heeft alles goed zelfstandig uitgewerkt en heeft doorgezet wanneer het niet in één keer lukte. Een goede tip voor Gerben is het altijd goed onderzoeken voor hij begint aan het programmeren. Dit is minder leuk werk maar het hoort er helaas wel bij!</p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 9: Reflectie op feedback.</h4>
                                <p>In het begin van mijn stage wilde ik te graag programmeren wegens ik dit heel leuk vind. Hierdoor maakte ik in het begin fouten omdat ik nog geen onderzoek had gedaan. Ik merk dat ik hier erg in vooruit gegaan ben tijdens mijn stage en dat het erg helpt.
                                    De volgende keer dat ik aan een nieuwe opdracht begin zal ik eerst aandacht besteden aan het onderzoeken voor ik ga programmeren.
                                </p></br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="12" class="wrapper style2 fade-in one">
            <div class="inner2">
                <div data-aos="fade-up-right" data-aos-delay="700">
                    <div class="box">
                        <h3>Voorbereiding</h3>
                        <div class="formmargin">
                            <div class="formmargin2"> 
                                </br>
                                <h4>Leerdoel 10: Wat wil ik leren?</h4>
                                <p>Ik wil na afloop van mijn stage in staat zijn om deel uit te kunnen maken van het team. Denk hierbij aan het volgen van de juiste procedures zoals Azure Devops, de SCRUM sprints en de meetings waar onder andere de daily standup onder valt. Hierin wil ik een actieve bijdrage kunnen leveren.</p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 10: Bewijs volgens Stageplan.</h4>
                                <p>Aantekeningen van Azure Devops en SCRUM documenten / screenshots die deelbaar zijn zonder bedrijfsgeheimen openbaar te maken.</p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 10: Uiteindelijke bewijs.</h4>
                                <p>Tijdens mijn stage heb ik veel gewerkt met Scrum, elke dag houden we een daily standup en elke twee weken houden we een sprint demo, retrospective en planning.
                                    Hier werk ik actief aan mee.
                                </p>    
                                <p>Zo houden we elke dag een daily standup, waarin we bespreken wat we hebben gemaakt de dag ervoor, wat we op de huidige dag gaan maken en of we nog vragen/problemen hebben.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel10/1.PNG') }}" alt="slider1"/>
                                <p>We houden sprint demos aan het einde van de sprint (eens in de twee weken), waarin we het gemaakte werk laten zien.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel10/2.PNG') }}" alt="slider1"/>
                                <p>We houden sprint retrospectives om te kijken wat er goed gegaan is en wat niet. Ook bespreken we wat de belangrijke verbeterpunten zijn voor de volgende sprint.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel10/3.PNG') }}" alt="slider1"/>
                                <p>We gebruiken een burndown chart om te zien of we op schema lopen.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel10/4.PNG') }}" alt="slider1"/>
                                <p>Per sprint hebben we user stories die we maken en die zetten we op done om de burndown chart omlaag te halen.</p>
                                <img class="stageimg" src="{{ asset('stagedocs/Leerdoel10/5.PNG') }}" alt="slider1"/>
                                <p>En bij het begin van elke sprint houden we een sprint planning om de nieuwe User Stories op het scrumboard te plaatsen.</p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 10: Inzichten verkregen.</h4>
                                <p>Voorheen heb ik twee stages gehad. Bij elke bedrijf werkt een team weer net wat anders. Vooral door de maatregelen van de overheid was het dit jaar anders dan normaal.
                                    Dit maakte de daily standups nog belangrijker en dat is tijdens mijn stage erg goed verlopen. Alle informatie heb ik goed door leren spelen en in Sprint Demos kon ik mijn gemaakte werk laten zien.
                                    Ik heb met Azure DevOps leren werken wat erg fijn is bevallen en wat veel meer waarde aan Scrum geeft wegens de goede structuur.
                                </p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 10: Reflectie.</h4>
                                <p>Tijdens mijn stage vind ik dat ik goed gebruik heb gemaakt van Scrum en DevOps. Ik heb de documentatie netjes bijgehouden en heb veel geleerd zoals ik hierboven beschrijf.
                                    Ik zal veel meenemen van DevOps in mijn toekomstige werk.
                                </p>
                                
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 10: Feedback begeleider.</h4>
                                <p>Gerben heeft een super goede bijdrage geleverd aan het team. Zo heeft Gerben dagelijks meegedaan met de Daily Stand-up en deed hij elke sprint mee met de Sprint Demo, Sprint Retrospective en Sprint Planning. Gerben heeft goed gebruikt gemaakt van Azure DevOps en heeft zeer goed gedocumenteerd. Ook heeft Gerben goed gecommuniceerd. Gerben is zeer sociaal en kundig wanneer het aankomt op de Soft Skills.</p>
                            </div>
                            <div class="formmargin2">
                                <h4>Leerdoel 10: Reflectie op feedback.</h4>
                                <p>Ik ben blij dat dit zo goed is bevallen! Ik heb het erg naar mijn zin gehad.</p></br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="13" class="wrapper style3">
            <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" class="inner" data-aos-delay="300">
                <header class="align-center">
                    <p>Beoordeling.</p>
                    <h2>Portfolio</h2>
                </header>
            </div>
        </section>

        <section id="one" class="wrapper style2 fade-in one">
            <div class="inner2">
                <div data-aos="fade-up-left" data-aos-delay="700">
                    <div class="box">
                        <h3>Beoordeling bestanden</h3>
                        <div class="formmargin">
                            <p>Mijn bedrijfsbegeleider heeft mij beoordeeld op zowel mijn leerdoelen als mijn portfolio. De beoordelingen kan je hieronder downloaden.</p>
                            <a href="{{ asset('stagedocs/Stageplannen/advies.docx') }}" download>
                                <p>Advies beoordeling stagebegeleider</p>
                                <br>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
                <?php
            } else {
                ?> 
                <section id="one" class="wrapper style2 fade-in one">
        <div class="inner2">
            <div data-aos="fade-up-right" data-aos-delay="700">
                <div class="box">


                    <!-- Form -->
                    <h3>Studentnummer Gerben</h3>

                    <form method="POST" action="{{ url('stage') }}">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}
                        <div class="formmargin">
                            <div class="formmargin2">
                                <input type="password" name="password" id="password" value="{{ old('pass') }}" placeholder="********"/>

                                @if($errors->any('password'))
                                    @foreach($errors->get('password') as $error)
                                        {{ $error }}<br>
                                    @endforeach
                                @endif
                            </div>
                            <!-- Break -->
                            <div class="formmargin2">
                                <input class="formmargin3" type="submit" value="Send Password" id="sendButton"/>
                                <button class="formmargin3 alt2" type="button" disabled>Fout nummer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
                <?php
            }
        ?>
    @else
    <section id="one" class="wrapper style2 fade-in one">
        <div class="inner2">
            <div data-aos="fade-up-right" data-aos-delay="700">
                <div class="box">


                    <!-- Form -->
                    <h3>Studentnummer Gerben</h3>

                    <form method="POST" action="{{ url('stage') }}">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}
                        <div class="formmargin">
                            <div class="formmargin2">
                                <input type="password" name="password" id="password" value="{{ old('pass') }}" placeholder="********"/>

                                @if($errors->any('password'))
                                    @foreach($errors->get('password') as $error)
                                        {{ $error }}<br>
                                    @endforeach
                                @endif
                            </div>
                            <!-- Break -->
                            <div class="formmargin2">
                                <input class="formmargin3" type="submit" value="Send Password" id="sendButton"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @endif
@endsection
