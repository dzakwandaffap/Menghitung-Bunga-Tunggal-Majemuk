<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Compounding Interest</title>
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

        .choose-asset {
            display: flex;
            align-items: center;
        }

        .choose-asset input {
            flex-grow: 1;
        }

        .choose-asset button {
            width: auto;
            margin-left: 10px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Kalkulator Compounding Interest</h2>
        <p>Compound interest atau bunga berbunga (bunga majemuk) adalah bunga yang dihitung dari jumlah pokok ditambah bunga yang diperoleh sebelumnya.</p>
        
        <div class="investment-type">
            <div id="monthly" class="investment-option">Deposit Tiap Bulan<br><small>(Averaging)</small></div>
            <div id="lumpsum" class="investment-option active">Deposit Sekali<br><small>(Lump Sump)</small></div>
        </div>

        <label for="deposit">Jumlah deposit (Rp)</label>
        <input type="number" id="deposit" placeholder="Deposit">

        <label for="duration">Jangka waktu (tahun)</label>
        <input type="number" id="duration" placeholder="Jangka waktu (tahun)">

        <label for="rate">Bunga % pertahun</label>
        <div class="choose-asset">
            <input type="number" id="rate" placeholder="Bunga">
            <button>Pilih Aset</button>
        </div>

        <button onclick="calculate()">Hitung</button>
    </div>

    <script>
        document.getElementById('monthly').addEventListener('click', function() {
            this.classList.add('active');
            document.getElementById('lumpsum').classList.remove('active');
        });

        document.getElementById('lumpsum').addEventListener('click', function() {
            this.classList.add('active');
            document.getElementById('monthly').classList.remove('active');
        });

        function calculate() {
            // Logika untuk menghitung bunga berbunga bisa ditambahkan di sini
            alert("Hitung hasil investasi!");
        }
    </script>
</body>
</html>

