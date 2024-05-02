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
    // Looping untuk membuat pola bintang dari 1 bintang hingga 10 bintang
    for ($i = 1; $i <= 10; $i++) {
        // Looping untuk menampilkan jumlah bintang pada setiap baris
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    ?>
</body>
</html>