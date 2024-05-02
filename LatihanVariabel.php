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
    $hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
    for ($i = 0; $i < count($hari); $i++) {
        echo "Hari ke-" . ($i + 1) . ": " . $hari[$i] . "<br>";
    }
    ?>
</body>
</html>