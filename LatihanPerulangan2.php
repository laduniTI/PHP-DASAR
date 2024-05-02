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
    <h1>Halaman PHP Saya</h1>
    <?php
    $angka = array(12, 13, 15, 16, 67, 189, 346, 876, 54232, 3256); // Ini adalah contoh array

    foreach ($angka as $a) {
        if ($a % 2 == 0) {
            echo "Nomor : $a Genap<br>";
        } else {
            echo "Nomor : $a Ganjil<br>";
        }
    }
    ?>
</body>
</html>