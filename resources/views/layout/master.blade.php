<!DOCTYPE HTML>
<!--━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━-->
<!--╭━━━┳━━━┳━━━┳━━━━┳━━━┳━━━┳╮╱╱╭━━┳━━━╮-->
<!--┃╭━╮┃╭━╮┃╭━╮┃╭╮╭╮┃╭━━┫╭━╮┃┃╱╱╰┫┣┫╭━╮┃-->
<!--┃╰━╯┃┃╱┃┃╰━╯┣╯┃┃╰┫╰━━┫┃╱┃┃┃╱╱╱┃┃┃┃╱┃┃-->
<!--┃╭━━┫┃╱┃┃╭╮╭╯╱┃┃╱┃╭━━┫┃╱┃┃┃╱╭╮┃┃┃┃╱┃┃-->
<!--┃┃╱╱┃╰━╯┃┃┃╰╮╱┃┃╱┃┃╱╱┃╰━╯┃╰━╯┣┫┣┫╰━╯┃-->
<!--╰╯╱╱╰━━━┻╯╰━╯╱╰╯╱╰╯╱╱╰━━━┻━━━┻━━┻━━━╯-->
<!--━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━-->
<!----Hallo daar nieuwschierige vriend!---->
<!-----Leuk dat je in mijn code kijkt.----->
<!------Dit is mijn eerste portfolio.------>
<!-------Omdat je dit gevonden hebt-------->
<!------zal ik je een puzzel op laten------>
<!----lossen doormiddel van de DevTool.---->
<!---Ga als eerst naar de DevTool console-->
<!--━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━-->
<!---------╭━━━┳━╮╱╭╮╱╭┳━━━┳╮╱╱╭╮---------->
<!---------┃╭━━┫┃╰╮┃┃╱┃┃╭━╮┃╰╮╭╯┃---------->
<!---------┃╰━━┫╭╮╰╯┃╱┃┃┃╱┃┣╮╰╯╭╯---------->
<!---------┃╭━━┫┃╰╮┃┣╮┃┃┃╱┃┃╰╮╭╯----------->
<!---------┃╰━━┫┃╱┃┃┃╰╯┃╰━╯┃╱┃┃------------>
<!---------╰━━━┻╯╱╰━┻━━┻━━━╯╱╰╯------------>
<!--━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━-->


<html>
<head>
    <title>Portfolio Gerben Put</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/gif" sizes="32x32">
</head>
<body>

<!-- Nav -->
<nav id="menu">
    <ul class="links align-center" id="pageCurrent">
        <li><a class="pageselect">Open in current page</a></li>
        <li><a href="gerbenput.com">Home</a></li>
        <li><a href="{{ url('designs') }}">Designs</a></li>
        <li><a href="{{ url('websites') }}">Websites</a></li>
        <li><a href="{{ url('contact') }}">Contact</a></li>
        <li><a id="particletoggler2" href="">togglers</a></li>
    </ul>
    <ul class="links align-center" id="pageNew">
        <li><a class="pageselect">Open in another page</a></li>
        <li><a href="gerbenput.com" target="_blank">Home</a></li>
        <li><a href="{{ url('designs') }}" target="_blank">Designs</a></li>
        <li><a href="{{ url('websites') }}" target="_blank">Websites</a></li>
        <li><a href="{{ url('contact') }}">Contact</a></li>
        <li><a id="particletoggler2" href="">togglers</a></li>
    </ul>
</nav>

@yield('content')

<div class="snap">
<!-- Footer -->
    <footer id="footer">
        <div class="container">
            <ul class="icons">
                <li><a href="https://www.facebook.com/gerben.put.5" class="icon fa-facebook"><span
                            class="label">Facebook</span></a></li>
                <li><a href="https://www.instagram.com/g3rbennn/?hl=nl" class="icon fa-instagram"><span class="label">Instagram</span></a>
                </li>
                <li><a href="mailto:gerbenputprivate@gmail.com" class="icon fa-envelope-o" target="_self"><span
                            class="label">Email</span></a>
                </li>
            </ul>
        </div>
        <div class="copyright">
            &copy; Gerben Put. All rights reserved.
        </div>
    </footer>
</div>

@if(View::hasSection('ids'))
    @yield('ids')
@else
    <script>var ids = [];</script>
@endif
<script>
    var noelementsurl = '{{url('noelements')}}';
    var puzzleurl = '{{url('puzzle')}}';
    var winnaarurl = '{{url('nietvindbareurl')}}';
</script>

<!-- Scripts -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/panelsnap.js') }}" defer></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        window.panelsnap = new PanelSnap();
    });
</script>
{{--<script src="{{ mix('js/jquery.min.js') }}"></script>--}}
{{--<script src="{{ mix('js/particles.js') }}"></script>--}}
{{--<script src="{{ mix('js/jquery.scrollex.min.js') }}"></script>--}}
<script src="{{ mix('js/app.js') }}"></script>
{{--<script src="{{ asset('js/jquery.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/jquery.scrollex.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/particles.js') }}"></script>--}}
{{--<script src="{{ asset('js/particles_toggler.js') }}"></script>--}}
{{--<script src="{{ asset('js/menu_toggler.js') }}"></script>--}}
{{--<script src="{{ asset('js/skel.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/util.js') }}"></script>--}}
{{--<script src="{{ asset('js/main.js') }}"></script>--}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
@yield('scripts')
<script>
    nietVindBareFunctie = window.nietVindBareFunctie;
    consoleLink = window.consoleLink;
</script>
</body>
</html>
