<?php
include("oop.php");

$result = ''; // Variabel untuk menyimpan hasil

if (isset($_POST["submit"])) {
    $modal = $_POST["modal"];
    $bunga = $_POST["bunga"];
    $waktu = $_POST["waktu"];
    
    // Jika input tambahan untuk "Mencari n" diisi

        $bungaMajemuk = new BungaMajemuk($modal, $bunga, $waktu);
        
        $bungaMajemuk->showScreenMajemuk();
 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Bunga Majemuk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 20px;
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

        .investment-type {
            display: flex;
            justify-content: space-between;
            margin: 20px 0;
        }

        .investment-type div {
            width: 48%;
            text-align: center;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            cursor: pointer;
        }

        .investment-type div.active {
            border-color: #0066cc;
            background-color: #e6f3ff;
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
            background-color: #0066cc;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #004999;
        }

        .additional-input {
            display: none;
        }

        /* Styling untuk div hasil */
        .result-container {
            margin-top: 20px;
            padding: 10px;
            background-color: #f1f1f1;
            border: 1px solid #ddd;
            border-radius: 5px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Kalkulator Bunga Majemuk</h2>
        <p>Compound interest atau bunga berbunga (bunga majemuk) adalah bunga yang dihitung dari jumlah pokok ditambah bunga yang diperoleh sebelumnya.</p>
        
        <div class="investment-type">
            <div id="monthly" class="investment-option">Mencari Nilai Akhir <br><small>(Hasil Akhir)</small></div>
            <div id="lumpsum" class="investment-option active">Mencari Nilai n<br><small>(Mencari n)</small></div>
        </div>

        <form method="POST" id="calcForm">
            <label for="modal">Modal (Rp)</label>
            <input type="number" id="modal" name="modal" placeholder="Modal" required>

            <label for="bunga">Bunga (%)</label>
            <input type="number" id="bunga" name="bunga" placeholder="Bunga" required>

            <label for="waktu">Waktu (Bulan)</label>
            <input type="number" id="waktu" name="waktu" placeholder="Waktu" required>

            <!-- Input tambahan untuk mencari n -->
            <div id="additional-fields" class="additional-input">
                <label for="finalAmount">Jumlah Akhir (Rp)</label>
                <input type="number" id="finalAmount" name="finalAmount" placeholder="Jumlah Akhir">
            </div>

            <button type="submit" name="submit">Hitung</button>
        </form>

        <!-- Div untuk menampilkan hasil -->
      

    <script>
        // Mengelola penggantian antara opsi "Mencari Nilai Akhir" dan "Mencari n"
        document.getElementById('monthly').addEventListener('click', function() {
            this.classList.add('active');
            document.getElementById('lumpsum').classList.remove('active');
            document.getElementById('additional-fields').style.display = 'none'; // Sembunyikan input tambahan
        });

        document.getElementById('lumpsum').addEventListener('click', function() {
            this.classList.add('active');
            document.getElementById('monthly').classList.remove('active');
            document.getElementById('additional-fields').style.display = 'block'; // Tampilkan input tambahan
        });
    </script>
</body>
</html>
