<!-- resources/views/pesan.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale())
}}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <title>Pemesanan</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
</head>

<body>
    <h1>Form Pemesanan</h1>
    <form method="post" action="{{ route('submit-order')
}}">
        @csrf
        <label for="name">NIK:</label>
        <input type="text" id="NIK" name="NIK" required><br>

        <label for="email">Nama:</label>
        <input type="Nama" id="Nama" name="Nama" required><br>

        <label for="Provinsi">Provinsi:</label>
        <input type="text" id="Provinsi" name="Provinsi" required><br>

        <label for="kota">Kota:</label>
        <input type="text" id="Kota" name="Kota" required><br>

        <label for="HP">noHP:</label>
        <input type="number" id="HP" name="HP" required><br>
        
        <button type="submit">Submit </button>
    </form>
</body>

</html>