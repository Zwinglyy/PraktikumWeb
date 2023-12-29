document.addEventListener('DOMContentLoaded', function () {
    // Array untuk menyimpan item yang akan dibeli
    var keranjang = [];

    // Fungsi untuk menampilkan pesan konfirmasi saat tombol "Beli Sekarang" diklik
    function beliSekarangClicked(productName, productPrice) {
        var confirmation = confirm("Anda yakin ingin membeli " + productName + "?");
        if (confirmation) {
            tambahKeKeranjang(productName, productPrice);
            alert("Produk telah ditambahkan ke dalam keranjang!");
        }
    }

    // Fungsi untuk menambahkan produk ke dalam keranjang
    function tambahKeKeranjang(productName, productPrice) {
        // Menambahkan produk ke dalam array keranjang
        keranjang.push({nama: productName, harga: productPrice});
        
        // Di sini, Anda dapat menambahkan logika untuk menangani produk yang ditambahkan ke dalam keranjang
        // Sebagai contoh, saya akan menampilkan informasi produk dalam konsol browser
        console.log("Produk ditambahkan ke dalam keranjang:");
        console.log("Nama Produk:", productName);
        console.log("Harga:", productPrice);
    }

    // Fungsi untuk menampilkan isi keranjang
    function tampilkanKeranjang() {
        var shoppingCartDiv = document.getElementById('shopping-cart');
    
        if (keranjang.length > 0) {
            shoppingCartDiv.innerHTML = "<h2>Keranjang Belanja:</h2>";
            keranjang.forEach(function (produk, index) {
                shoppingCartDiv.innerHTML += `<p>[${index + 1}]  ${produk.nama}</p>`;
            });
        } else {
            shoppingCartDiv.innerHTML = "<p>Keranjang kosong.</p>";
        }
    }

    // Menambahkan event listener untuk setiap tombol "Beli Sekarang" pada produk
    var beliButtons = document.querySelectorAll('.product button');
    beliButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            var productName = this.parentNode.querySelector('h2').textContent;
            var productPrice = this.parentNode.querySelector('p').textContent;
            beliSekarangClicked(productName, productPrice);
            tampilkanKeranjang(); // Menampilkan keranjang setelah menambahkan produk
        });
    });

    var beliButtons1 = document.querySelectorAll('.product1 button');
    beliButtons1.forEach(function (button) {
        button.addEventListener('click', function () {
            var productName = this.parentNode.querySelector('h2').textContent;
            var productPrice = this.parentNode.querySelector('p').textContent;
            beliSekarangClicked(productName, productPrice);
            tampilkanKeranjang(); // Menampilkan keranjang setelah menambahkan produk
        });
    });

    var beliButtons2 = document.querySelectorAll('.product2 button');
    beliButtons2.forEach(function (button) {
        button.addEventListener('click', function () {
            var productName = this.parentNode.querySelector('h2').textContent;
            var productPrice = this.parentNode.querySelector('p').textContent;
            beliSekarangClicked(productName, productPrice);
            tampilkanKeranjang(); // Menampilkan keranjang setelah menambahkan produk
        });
    });
});
