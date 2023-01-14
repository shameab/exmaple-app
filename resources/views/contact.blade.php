<!DOCTYPE html>
<html>

<head>
    <title>Rana's Recipes</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>


    <style>
        body {
            background-image: url("{{ asset('/images/globe.jpeg') }}");
        }
    </style>

    <div class="topnavbar">
        <a href="/">Home</a>
        <a href="{{ route('post.index') }}">Recipes</a>
        <a href="{{ route('contact.index') }}">Contact</a>
        <a href="{{ route('about.index') }}">About</a>
        <a href="login" class="split">Login</a>
        <a href="register" class="split">Register</a>
    </div>



    <div class="header2">
        <h1>Contact Us</h1>
    </div>

    <div class="contactcard">
    </div>
</body>

</html>
