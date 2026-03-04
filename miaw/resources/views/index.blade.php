<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Buku</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <header>
        <h2 class="Logo">Logo</h2>
        <div class="Navbar-container">
            <a href="#" class="Navbar">Home</a>
            <a href="#" class="Navbar">About</a>
            <a href="#" class="Navbar">Services</a>
            <a href="#" class="Navbar">Contact</a>
        </div>
    </header>

    <main>
        <h2 class="judul">Daftar Makanan</h2>

        <div class="menu-container">
            @foreach($data_buku as $buku)
                <div class="menu">
                    <div class="nama-makanan">
                        <h3>{{ $buku->nama }}</h3>
                    </div>
                    <div class="gambar-makanan">
                        <span>{{ $buku->alamat }}</span>
                    </div>
                </div>
            @endforeach
        </div>

<div class="previous">
    {{ $data_buku->links('pagination::bootstrap-5') }}
</div>
    </main>

</body>
</html>