<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Post</title>
</head>
<body>

    <h1>{{ $post->title }}</h1>

    <p>{{ $post->content }}</p>

    <p>Penulis: {{ $post->author }}</p>

    <p>Dibuat: {{ $post->created_at }}</p>

    <br>

    <a href="{{ route('posts.index') }}">Kembali</a>

</body>
</html>