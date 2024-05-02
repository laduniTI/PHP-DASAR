<!doctype html>
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
    // Definisikan nilai jari-jari lingkaran
    $jari_jari = 15;

    // Hitung keliling lingkaran
    $keliling = 2 * M_PI * $jari_jari;

    // Tampilkan hasil
    echo "Keliling lingkaran dengan jari-jari $jari_jari cm adalah: " . $keliling . " cm";
    ?>
</body>
</html>