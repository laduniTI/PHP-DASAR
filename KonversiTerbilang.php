<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Div dan Span</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307020">
    <meta name="author" content="laduni">
</head>

<body>
    <h2>Konversi Angka ke Terbilang</h2>

    <form method="post">
        <label for="angka">Masukkan Angka (1-9):</label>
        <input type="number" id="angka" name="angka" min="1" max="9">
        <button type="submit">Konversi</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $angka = $_POST["angka"];
        $terbilang = "";

        switch ($angka) {
            case 1:
                $terbilang = "satu";
                break;
            case 2:
                $terbilang = "dua";
                break;
            case 3:
                $terbilang = "tiga";
                break;
            case 4:
                $terbilang = "empat";
                break;
            case 5:
                $terbilang = "lima";
                break;
            case 6:
                $terbilang = "enam";
                break;
            case 7:
                $terbilang = "tujuh";
                break;
            case 8:
                $terbilang = "delapan";
                break;
            case 9:
                $terbilang = "sembilan";
                break;
            default:
                $terbilang = "Tidak Valid";
        }
        echo "<p>Terbilang: $terbilang</p>";
    }
    ?>
</body>
</html>