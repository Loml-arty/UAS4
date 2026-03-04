<!DOCTYPE html>
<html>
<head>
    <title>Upload Foto</title>
</head>
<body>
@if(session('success'))
    <p style="color:green;">{{ session('success') }}</p>
@endif

<form action="/upload" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Nama:</label>
    <input type="text" name="name"><br><br>
    <label>Foto:</label>
    <input type="file" name="photo"><br><br>
    <button type="submit">Upload</button>
</form>

<hr>

@foreach ($cards as $card)
    <div>
        <p>{{ $card->nama_makanan }}</p>
        <img src="{{ asset('storage/'.$card->gambar_makanan) }}" width="150">
    </div>
@endforeach
</hr>


</body>
</html>
