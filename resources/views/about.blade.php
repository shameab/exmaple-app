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
            background-image: url("{{ asset('/images/food.jpeg') }}");
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
        <h1>About Us</h1>
    </div>

    <div class='aboutcard'>
        <p>
            Welcome!!
            <br>
            For a long time I have searched for a place where we could all login and share our favourite recipes.
            From traditional homemade food, to our random need-to-go-shopping meals, I wanted an open space for culinary
            creativity.
            I hope you make the most out of your time here and get to explore a whole world's worth of flavours from
            your very own kitchen,
            and maybe even make a few masterchef friends along the way.
            Happy cooking!!
            </br>
            <br>
            Yours faithfully, Shamea
            </br>
        </p>
    </div>
</body>

</html>
