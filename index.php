<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Bunga</title>
    <style>
        body {
            background-color: #f5f5f5; /* Abu-abu muda */
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        .con {
            background-color: #ffffff; /* Putih */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            border: 2px solid #d1d1d1; /* Abu-abu terang untuk outline */
        }

        h2 {
            color: #000000; /* Hitam */
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 24px;
        }

        form {
            margin-bottom: 16px;
        }

        label {
            display: block;
            font-size: 18px;
            font-weight: 500;
            color: #333333; /* Abu-abu gelap */
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 10px;
            border-radius: 20px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }

        .majemuk-button {
            background-color: #000000; /* Hitam */
            color: #ffffff; /* Putih */
            border-color: #344323; /* Hitam gelap */
        }

        .majemuk-button:hover {
            background-color: #004999;
        }

        .tunggal-button {
            background-color: #333333; /* Abu-abu gelap */
            color: #ffffff; /* Putih */
            border-color: #444444; /* Abu-abu lebih gelap */
        }

        .tunggal-button:hover {
            background-color: #004999;
        }
    </style>
</head>
<body>

    <div class="con">
        <h2>Kalkulator Bunga</h2>

        <form action="majemuk.php" method="post">
            <label for="majemuk">Bunga Majemuk</label>
            <input type="submit" value="majemuk" class="majemuk-button">
        </form>

        <form action="tunggal.php" method="post">
            <label for="tunggal">Bunga Tunggal</label>
            <input type="submit" value="tunggal" class="tunggal-button">
        </form>

    </div>

</body>
</html>
