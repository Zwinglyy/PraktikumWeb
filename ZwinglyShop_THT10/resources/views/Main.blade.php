<!DOCTYPE html>
<html>

<head>
    <title>Alexander Musik Online</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('styles.css') }}"> <!--Blm banyak css nya-->
</head>

<body>
    <header style="display: flex; flex-direction: column; align-items: center; text-align: center;">
        <h1>Selamat Datang di Alexander Musik Online</h1>

        <nav>
            <ul style="display: flex; justify-content: space-around; width: 300px; list-style: none;">
                <li><a href="Login.html">Login</a></li>
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Produk</a></li>
                <li><a href="#">Tentang Kami</a></li>
                <li><a href="#shopping-cart">Keranjang</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <center>
            <h2> Rekomendasi</h2>
        </center>
        <div class="product-container">
            <section class="product">
                <img src="GItar.webp" alt="Gitar Akustik" width="200" height="">
                <h2>Gitar listrik RGIT20FE</h2>
                <p>Harga: 21.644.609 IDR</p>
                <a href="https://ibanez.fandom.com/wiki/RGIT20FE">Specifications</a>
                <button>Beli Sekarang</button>
            </section>

            <section class="product1">
                <img src="keyboard.jpg" alt="Keyboard Elektronik" width="200" height="150">
                <h2>YAMAHA NP32 76 Key</h2>
                <p>Harga: 9.426.000 IDR</p>
                <a href="https://usa.yamaha.com/products/musical_instruments/keyboards/piaggero/np-32_12/specs.html">Specifications</a>
                <button>Beli Sekarang</button>
            </section>


            <section class="product2">
                <img src="drums.webp" alt="Drum Set" width="200" height="">
                <h2>Pearl Export Standard 5-Piece Drum Set </h2>
                <h4>HWP830 hardware pack:</h4>
                <center>

                    <div class="left" style="  width: 100px;">
                        <ul>
                            <li>1 x P-930 Demonator Pedal</li>
                            <li>1 x BC-830 Convertible Boom/Straight Stand</li>
                            <li>1 x C-830 Straight Stand</li>
                            <li>1 x H-830 Hi-Hat Stand</li>
                            <li>1 x S-830 Snare Stand</li>
                            <li>2 x TH-70I Tom Holder</li>
                        </ul>
                    </div>
                </center>
                <p>Harga: 16,943,500 IDR</p>
                <button>Beli Sekarang</button>
            </section>
        </div>
        <div id="shopping-cart">
            <!-- Shopping cart content will be dynamically added here -->

        </div>
    </main>

    <footer>
        <center>
            <p>&copy; 2023 Toko Alat Musik Online. Semua hak dilindungi.</p>
        </center>
    </footer>
    <script src="main.js"></script>
</body>

</html>
