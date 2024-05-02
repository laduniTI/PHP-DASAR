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
    /* Operator logika yang bisa digunakan
    * ==    sama dengan                     $x == $y
    * ===   identical                       $x === $y
    * !=    tidak sama dengan               $x != $y
    * <>    tidak sama dengan               $x <> $y
    * !==   not identical                   $x !== $y
    * >     lebih besar dari                $x > $y
    * <     kurang dari                     $x < $y
    * >=    lebih besar atau sama dengan    $x >= $y
    * <=    kurang dari atau sama dengan    $x <= $y
    * <=>   spaceship                       $x <=> $y
    */

    $t = date(format:"H"); // mendapatkan jam dengan format 1-24
    echo "If: ";
    if ($t < 16) {
        echo "Selamat siang!";
    }

    // Tambahkan kode dibawah ini untuk if else
    $t = date(format: "H"); // mendapatkan jam dengan format 1-24
    echo "<br> If dan Else <br>";
    if ($t < 20) {
        echo "Selamat siang!";
    } else {
        echo "Selamat malam!";
    }

    // Tambahkan kode dibawah ini untuk nested if
    $t = date(format: "H"); // mendapatkan jam dengan format 1-24
    echo "<br> Nested If <br>";
    if ($t < 12) {
        echo "Selamat Pagi!";
    } elseif ($t < 16) {
        echo "Selamat sore!";
    } else {
        echo "Selamat Malam!";
    }
    ?>
</body>
</html>