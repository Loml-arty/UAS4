<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="menu-container">
        @foreach($food_cards as $table)
            <div class="menu">
                <div class="nama-makanan">
                    <h3>{{ $table->nama_makanan }}</h3>
                </div>
                <div class="gambar-makanan-container">
                    <img class="gambar-makanan" src="{{ asset('storage/' . $table->foto_makanan) }}">
                </div>
                <button class="view_menu">View More>>
                    
                </button>
            </div>

            <div class="modal_container">
                <div class="popup-menu-container">
                   <h3 class="nama-makanan-popup">{{ $table->nama_makanan }}</h3>

                    <div class="gambar-popup-container">
                        <img class="gambar-makanan-popup" src="{{ asset('storage/' . $table->foto_makanan) }}">
                    </div>

                    <div class="deskripsi-container">
                        <p class="deskripsi">{{ $table->deskripsi_makanan }}</p>
                    </div>

                    <div class="beli-container">
                        <form action="{{ route('pembayaran.store') }}" method="POST">
                            @csrf

                            <input type="hidden" name="nama_makanan" value={{ $table->nama_makanan }}>
                            <input type="hidden" name="harga" value={{ $table->Harga}}>
                            <input type="hidden" name="jumlah" value="1">
                            <button type="submit" class="beli">Checkout</button>
                        </form>
                    </div>

                    <div class="harga-container">
                        <b class="harga">Rp.{{ number_format($table->Harga,0,',',',')  }}</b>
                    </div>

                    <button class="close_view"><i class="fa-solid fa-xmark"></i></button>
                </div>
            </div>



        @endforeach
    </div>
</x-layout>
