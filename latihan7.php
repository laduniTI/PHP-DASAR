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
    $namaBuah = array("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");
    echo "Saya suka " . $namaBuah[0] . ", " . $namaBuah[1]  . ", " . $namaBuah[2] . ", " . $namaBuah[3]. ", " . "dan" . $namaBuah[4] . ".<br>";

    //tampilkan Mangga
    echo "saya suka " . $namaBuah[0] . "<br>";
    //tampilkan Jeruk
    echo "saya suka " . $namaBuah[1]. "<br>";
    //tampilkan Apel
    echo "saya suka " . $namaBuah[2]. "<br>";
    //tampilkan Melon
    echo "saya suka " . $namaBuah[3]. "<br>";
    //tampilkan Manggis
    echo "saya suka " . $namaBuah[4]. "<br>" . "<br>";

    //array dengan spesifik index
    $umur = array("Andi"=>"35 Tahun", "Ben"=>"37 Tahun", "Joe"=>"40 Tahun", "ahmad"=>"50 Tahun");
    $umur['ahmad'] = "50 Tahun";
    echo "Umur andi adalah " . $umur['Andi'] . "<br>";

    //tampilkan semua umur
    echo "Umur ben adalah " . $umur['Ben'] . "<br>";
    echo "Umur joe adalah " . $umur['Joe'] . "<br>";
    echo "Umur ahmad adalah " . $umur['ahmad'];
    ?>
</body>
</html>