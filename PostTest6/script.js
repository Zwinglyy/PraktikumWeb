function redeemVoucher() {
    // Get the selected fruit
    var fruit = document.getElementById("fruits");
    var nama =  fruit.options[fruit.selectedIndex].text;
    
    // Get the selected quantity
    var quantity = document.getElementById("jumlah").value;

    // Get the voucher code
    var voucherCode = document.getElementById("voucherCode").value;

    if (fruit && quantity && voucherCode) {
        var price = fruit.options[fruit.selectedIndex].value * quantity; 
        
        if (voucherCode === "asprakleonganteng") {
            price = price * 0.2;
        }
        else{
            price = price * 0.8;
        }
        var resultElement = document.getElementById("result");
        resultElement.innerHTML = "Voucher Berhasil dengan barang " + nama + " dengan jumlah " + quantity + " dengan harga " + price + " (setelah di diskon)";
    } else {
        var resultElement = document.getElementById("result");
        resultElement.innerHTML = "Please fill in all the fields.";
    }
}


