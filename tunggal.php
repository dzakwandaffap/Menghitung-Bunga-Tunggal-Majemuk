<?php
include("oop.php");

$result = ''; // Variabel untuk menyimpan hasil

if (isset($_POST["submit"])) {
    $modal = $_POST["modal"];
    $bunga = $_POST["bunga"];
    $waktu = $_POST["waktu"];

    $bungatunggal = new BungaTunggal($modal, $bunga, $waktu);
    ob_start(); // Start output buffering
    $bungatunggal->showScreenTunggal();
    $result = ob_get_clean(); // Store the output in the result variable
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Bunga Tunggal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            max-width: 500px;
            background-color: white;
            margin: 0 auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        p {
            text-align: center;
            color: #666;
            font-size: 14px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #00000;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #004999;
        }

        .result-container {
            margin-top: 20px;
            padding: 10px;
            background-color: #f1f1f1;
            border: 1px solid #ddd;
            border-radius: 5px;
            color: #333;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Kalkulator Bunga Tunggal</h2>
        <p>Bunga tunggal adalah bunga yang dihitung dari pokok pinjaman tanpa memperhitungkan bunga yang sudah diperoleh sebelumnya.</p>

        <form method="POST" id="calcForm">
            <label for="modal">Modal (Rp)</label>
            <input type="number" id="modal" name="modal" placeholder="Modal" required>

            <label for="bunga">Bunga (%)</label>
            <input type="number" id="bunga" name="bunga" placeholder="Bunga" required>

            <label for="waktu">Waktu (Bulan)</label>
            <input type="number" id="waktu" name="waktu" placeholder="Waktu" required>

            <button type="submit" name="submit">Hitung</button>
        </form>

        <?php if ($result): ?>
            <div class="result-container">
                <?php echo $result; ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
