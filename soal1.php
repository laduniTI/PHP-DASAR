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
    // Mendefinisikan variabel gaji pokok dan tunjangan jabatan
    $gajiPokok = 3250000; // Gaji pokok Rp. 3.250.000,-
    $tunjanganJabatan = 1200000; // Tunjangan jabatan Rp. 1.200.000,-

    // Menghitung gaji kotor (gaji pokok + tunjangan jabatan)
    $gajiKotor = $gajiPokok + $tunjanganJabatan;

    // Menghitung pajak penghasilan (10% dari gaji kotor)
    $pajakPenghasilan = 0.1 * $gajiKotor;

    // Menghitung gaji bersih (gaji kotor dikurangi pajak penghasilan)
    $gajiBersih = $gajiKotor - $pajakPenghasilan;

    // Menampilkan hasil gaji bersih yang diterima Obi setiap bulannya
    echo "Gaji bersih yang diterima Obi setiap bulannya adalah Rp. " . number_format($gajiBersih, 0, ',', '.') . ",-";
    ?>
</body>
</html>