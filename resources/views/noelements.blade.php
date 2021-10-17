<html>
<head>
    <title>Wessfun</title>
    <link href="{{asset('_error.scss')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=ABeeZee" rel="stylesheet">
    <meta http-equiv="refresh" content="5;url={{url('')}}"/>
</head>
<body>
<div class="error-page">
    <h1 data-h1="Please">Please</h1>
    <p data-p="Do not inspect my elements!">Do not inspect my elements!</p>

</div>
<div class="error-page2">
    <h2 data-h2="Redirecting in 5 seconds...">Redirecting in 5 seconds...</h2>
    <progress max="5" value="0" id="progressBar"></progress>
</div>

<script>
    var timeleft = 5;
    var downloadTimer = setInterval(function () {
        document.getElementById("progressBar").value = 5 - --timeleft;
        if (timeleft <= 0)
            clearInterval(downloadTimer);
    }, 1000);
</script>

</body>
</html>

