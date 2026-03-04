<x-layout>
    <x-slot:title>Input</x-slot:title>

    <form action="{{ route('makanan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label>Nama Makanan:</label>
        <input type="text" name="nama_makanan" required>

        <label>Foto Makanan:</label>
        <input type="file" name="foto_makanan" required>

        <label>Deskripsi Makanan</label>
        <input type="text" name="deskripsi_makanan" required>

        <label>Harga</label>
        <input type="text" name="Harga" required>

        <button type="submit">Simpan</button>
    </form>

</x-layout>
