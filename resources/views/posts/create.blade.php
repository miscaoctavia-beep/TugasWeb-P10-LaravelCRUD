<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Post</title>
</head>
<body>

    <h1>Tambah Post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <label>Judul</label><br>
        <input type="text" name="title"><br><br>

        <label>Isi</label><br>
        <textarea name="content"></textarea><br><br>

        <label>Penulis</label><br>
        <input type="text" name="author"><br><br>

        <button type="submit">Simpan</button>
    </form>

    <br>

    <a href="{{ route('posts.index') }}">Kembali</a>

</body>
</html>