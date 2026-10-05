<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Post</title>
</head>
<body>

    <h1>Edit Post</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Judul</label><br>
        <input type="text" name="title" value="{{ $post->title }}"><br><br>

        <label>Isi</label><br>
        <textarea name="content">{{ $post->content }}</textarea><br><br>

        <label>Penulis</label><br>
        <input type="text" name="author" value="{{ $post->author }}"><br><br>

        <button type="submit">Update</button>
    </form>

    <br>

    <a href="{{ route('posts.index') }}">Kembali</a>

</body>
</html>