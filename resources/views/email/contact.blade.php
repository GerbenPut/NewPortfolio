Email from: {{ $name }} &lt;{{ $email }}&gt;<br>
<br>
Message: <br>
{{ $msg }}

<html>
<head>
    <title>Portfolio</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=ABeeZee" rel="stylesheet">
    <meta http-equiv="refresh" content="5;url={{ url('') }}"/>
</head>
<body>
<div class="error-page">
    <h1 data-h1="404">{{ $name }}</h1>
    <p data-p="PAGE NOT FOUND">{{ $msg }}</p>

</div>
<div class="error-page2">
    <h2 data-h2="Redirecting in 5 seconds...">{{ $email }}</h2>
    <progress max="5" value="0" id="progressBar"></progress>
</div>

</body>
</html>
