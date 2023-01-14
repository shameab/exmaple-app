<!DOCTYPE html>
<html>

<head>
    <title>Rana's Recipes</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
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
        <h1>New Post</h1>
    </div>

    <div class="card">
        <div class="post-form">
            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label class="title"><span>Title</span></label>
                <input type="text" id="title" name="title" value="{{ old('title') }}" />
                @error('title')
                    <p style="color: red">{{ $message }}</p>
                @enderror
                <label for="image"><span>Image</span></label>
                <input type="file" id="image" name="image" />
                @error('image')
                    <p style="color: red">{{ $message }}</p>
                @enderror
                <label for="body"><span>Body</span></label>
                <textarea id="body" name="body">{{ old('body') }}</textarea>
                @error('body')
                    <p style="color: red">{{ $message }}</p>
                @enderror
                <input type="submit" value="Submit" />
        </div>
    </div>


    <script>
        ClassicEditor
            .create(document.querySelector('#body'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>

</body>

</html>
