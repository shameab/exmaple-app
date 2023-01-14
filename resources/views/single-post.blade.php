<!DOCTYPE html>
<html>

<head>
    <title>Rana's Recipes</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}" />>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
</head>

<body>


    <style>
        body {
            background-image: url("{{ asset('/images/fd.jpeg') }}");
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


    <main class="card">
        <section class="single-blog-post">
            <div class="header">
                <h1>{{ $post->title }}</h1>
            </div>
            <p>
                Written By 
                <a href="{{ route('post.showall', $post) }}" class="split">{{ $post->user->name }}</a>
            

            </p>
            <img src="{{ asset($post->imagePath) }}" alt="" />
            </div>
            <p>
                {{ $post->created_at->diffForHumans() }}
            </p>
            <h3> Description:</h3>
            {!! $post->body !!}
        </section>

        <h4> Comments </h4>
        <div class="commentscard">
            @foreach ($post->comments as $comment)
                <div class="commentbubble">
                    <p>
                        {{ $comment->comment }}
                    </p>
                    <h5>
                        Posted by: {{ $comment->user->name }}
                        <br>
                        {{ $comment->created_at->diffForHumans() }}
                        </br>
                    </h5>
                </div>
            @endforeach
        </div>
        

        @auth
            @if (auth()->user()->id == $post->user->id)
                <div class="postbuttons">
                    <form action="{{ route('post.edit', $post) }}">
                        <input type="submit" value="Edit">
                    </form>
                    <form action="{{ route('post.destroy', $post) }}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </div>
            @endif
        @endauth

    </main>

    <div class="comment-form">
        <form action="{{ route('comment.store', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h3>
                <label for="comment">Add Comment</label>
            </h3>
            <textarea id="comment" name="comment">{{ old('comment') }}</textarea>
            @error('comment')
                <p style="color: red">{{ $message }}</p>
            @enderror
            <input type="submit" value="Submit" />
        </form>
    </div>

    </div>
</body>

</html>
