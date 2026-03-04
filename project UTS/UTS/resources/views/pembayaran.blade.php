<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="checkout-container">
        <div class="pesanan-container">
            <h3 class="pesanan">Pesanan</h3>
            <div class="jumlah-pesanan-container">
                <table class="jumlah-pesanan">
                    <thead>
                        <tr>
                            <th class="th-makanan">Nama Makanan</th>
                            <th class="th-pesanan">Harga</th>
                            <th class="th-pesanan">Jumlah</th>
                            <th class="th-pesanan">Total</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($Payments as $table)
                            <tr>
                                <td class="th-makanan-isi">{{ $table->nama_makanan }}</td>
                                <td class="isi-pesanan">{{ number_format($table->harga, 0, ',', '.') }}</td>
                                <td class="isi-pesanan">{{ $table->jumlah }}</td>
                                <td class="isi-pesanan">{{number_format($table->total, 0, ',', '.')}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="total-pesanan-container">
            <div class="total-pesanan">
                <h3 class="checkout"></h3>
                <h2>
                    <strong>Total: Rp.{{ number_format($grandTotal, 0, ',', '.')}}</strong>
                </h2>

            </div>
        </div>

        
        <div class="buy-container">
            <button class="pay-button" id="pay-button">Bayar ></button>

            <script type="text/javascript">
                // For example trigger on button clicked, or any time you need
                var payButton = document.getElementById('pay-button');
                payButton.addEventListener('click', function () {
                    console.log(token);
                    
                    // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
                    window.snap.pay('7f5ee01b-1149-4c5e-91c7-be90656a1e5a');
                    // customer will be redirected after completing payment pop-up
                });
            </script>


        </div>
        </body>
        <div class="total-harga-container">
        </div>

    </div>

    </div>



</x-layout>