<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Post</title>
</head>
<body>

    <h1>Daftar Post</h1>

    <a href="{{ route('posts.create') }}">Tambah Post</a>

    <hr>

    @foreach ($posts as $post)
        <h2>{{ $post->title }}</h2>

        <p>{{ $post->content }}</p>

        <p>Penulis: {{ $post->author }}</p>

        <a href="{{ route('posts.show', $post->id) }}">Lihat</a>
        |
        <a href="{{ route('posts.edit', $post->id) }}">Edit</a>

        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Hapus</button>
        </form>

        <hr>
    @endforeach

    {{ $posts->links() }}

</body>
</html>