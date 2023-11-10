document.addEventListener('DOMContentLoaded', function () {
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
        // Di sini, Anda dapat menambahkan logika untuk menangani produk yang ditambahkan ke dalam keranjang
        // Sebagai contoh, saya akan menampilkan informasi produk dalam konsol browser
        console.log("Produk ditambahkan ke dalam keranjang:");
        console.log("Nama Produk:", productName);
        console.log("Harga:", productPrice);
    }

    // Menambahkan event listener untuk setiap tombol "Beli Sekarang" pada produk
    var beliButtons = document.querySelectorAll('.product button');
    beliButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            var productName = this.parentNode.querySelector('h2').textContent;
            var productPrice = this.parentNode.querySelector('p').textContent;
            beliSekarangClicked(productName, productPrice);
        });
    });

    var beliButtons1 = document.querySelectorAll('.product1 button');
    beliButtons1.forEach(function (button) {
        button.addEventListener('click', function () {
            var productName = this.parentNode.querySelector('h2').textContent;
            var productPrice = this.parentNode.querySelector('p').textContent;
            beliSekarangClicked(productName, productPrice);
        });
    });

    var beliButtons2 = document.querySelectorAll('.product2 button');
    beliButtons2.forEach(function (button) {
        button.addEventListener('click', function () {
            var productName = this.parentNode.querySelector('h2').textContent;
            var productPrice = this.parentNode.querySelector('p').textContent;
            beliSekarangClicked(productName, productPrice);
        });
    });
});
