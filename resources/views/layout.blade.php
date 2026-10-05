<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout - P9</title>
</head>
<body>

    <h1>Data Mahasiswa</h1>

<p>Nama: {{ $mahasiswa['nama'] }}</p>
<p>Kelas: {{ $mahasiswa['kelas'] }}</p>
<p>Semester: {{ $mahasiswa['semester'] }}</p>
    <a href="/">Home</a> |
    <a href="/contact">Contact</a>

</body>
</html>