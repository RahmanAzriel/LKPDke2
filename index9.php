<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rupiah to Coin Converter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h2 {
            color: #333;
        }
        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h2>Rupiah to Coin Converter</h2>
    <form method="post">
        <label for="rupiah">Masukkan Jumlah Rupiah:</label>
        <input type="number" name="rupiah" id="rupiah" required><br><br>
        <input type="submit" value="Konversi">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rupiah = $_POST['rupiah'];

        if (!is_numeric($rupiah)) { // Cek apakah input adalah angka 
            echo "<p>Invalid input. Please enter a valid number.</p>";
            return; // Menghentikan proses jika input bukan angka
        }

        $coins = [100000, 5000, 2000, 100]; // Daftar koin yang dapat dikonversi
        $result = []; // buat nanti nyimpen hasil dari konversi koin

        foreach ($coins as $coin) {
            $result[$coin] = intdiv($rupiah, $coin); // Menghitung jumlah koin
            $rupiah = $rupiah % $coin; // Sisa rupiah setelah diambil koin
        }

        ?>
        <h3>Hasil Konversi:</h3>
        <ul>
            <?php foreach ($result as $coin => $count) { // Menampilkan hasil konversi koin ?>
                <li>Koin Rp<?= $coin ?>: <?= $count // Menampilkan bilangan koin yang diambil dan sisa duit ?></li>
            <?php } ?>
        </ul>
        <?php if ($rupiah > 0) { ?>
            <p>Sisa Rupiah: Rp<?= $rupiah ?> (Tidak dapat dikonversi ke koin)</p>
        <?php } ?>
    <?php } ?>
</body>
</html>