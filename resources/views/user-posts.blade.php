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
            background-image: url("{{ asset('/images/recipesback2.jpeg') }}");
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
        <h1>Posts</h1>
    </div>


    @foreach ($posts as $post)
        <div class="column">
            <div class="row">
                <div class="postscard">
                    <h1>
                        <img src="{{ asset($post->imagePath) }}" alt="" />
                    </h1>
                    <h2>
                        <a href="{{ route('post.show', $post) }}"> {{ $post->title }}</a>
                    </h2>
                    <h4>
                        Posted by: {{ $post->user->name }}
                    </h4>
                    <h4>
                        {{ $post->created_at->diffForHumans() }}
                    </h4>

                </div>
            </div>
        </div>
    @endforeach




</body>

</html>