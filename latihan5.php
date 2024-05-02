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
    $warna = "merah"; 
    switch ($warna) {
        case "merah":
            echo "Warna adalah merah"; 
            break;
        case "kuning":
            echo "Warna adalah kuning";
            break;
        case "hijau":
            echo "Warna adalah hijau"; 
            break;
        default:
            echo "Warna tidak dikenal!"; 
    }
    echo "<br>";
    ?>
</body>
</html>