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
    $scores = [
        ["No Urut", "Poin", "Siswa"],
        [1, 75, "Adi"],
        [2, 80, "Joni"],
        [3, 65, "Jihan"],
        [4, 70, "Aya"],
        [5, 85, "Ita"],
        [6, 90, "Budi"],
        [7, 95, "Tini"],
        [8, 65, "Sari"]
    ];
    foreach ($scores as $score) {
        if ($score[0] == 5) {
            echo "Poin siswa dengan nomor urut 5 adalah: " . $score[1] . "<br>";
            break;
        }
    }
    foreach ($scores as $score) {
        if ($score[1] == 90) {
            echo "Nama siswa dengan poin 90 adalah: " . $score[2] . "<br>" . "\n";
        }
    }
    $found = false;
    foreach ($scores as $score) {
        if ($score[1] == 100) {
            echo "Nama siswa dengan poin 100 adalah: " . $score[2] . "<br>" .  "\n";
            $found = true;
        }
    }
    if (!$found) {
        echo "Nama siswa yang memiliki poin 100: Hasil tidak ada.\n";
    }
    ?>
</body>
</html>