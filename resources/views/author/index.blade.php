<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Penulis</title>
</head>
<body>
    <h1>Daftar Penulis Buku</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Foto</th>
                <th>Bio</th>
            </tr>
        </thead>
        <tbody>
            <!-- Melakukan perulangan untuk menampilkan data array authors -->
            @foreach($authors as $author)
            <tr>
                <td>{{ $author->id }}</td>
                <td>{{ $author->name }}</td>
                <td>{{ $author->photo }}</td>
                <td>{{ $author->bio }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>