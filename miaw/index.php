<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h2>Daftar Buku</h2>
    <table border="1" cellpadding="5">
        <tr>
            <th>ID Buku</th>
            <th>Nama</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
        </tr>
        @foreach($data_buku as $buku)
            <tr>
                <td>{{ $buku->id_buku }}</td>
                <td>{{ $buku->nama }}</td>
                <td>{{ $buku->penulis }}</td>
                <td>{{ $buku->tahun_terbit }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
