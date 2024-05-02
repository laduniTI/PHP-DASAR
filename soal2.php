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
    // Mendefinisikan jumlah uang yang akan diambil Ani
    $jumlahUang = 1387500; // Rp. 1.387.500,-

    // Mendefinisikan pecahan uang yang berlaku
    $pecahanUang = array(100000, 50000, 20000, 10000, 5000, 2000, 500);

    // Inisialisasi array untuk menyimpan banyaknya masing-masing pecahan uang yang diperoleh
    $banyakPecahan = array();

    // Loop untuk menghitung banyaknya masing-masing pecahan uang
    foreach ($pecahanUang as $pecahan) {
        $jumlahPecahan = intval($jumlahUang / $pecahan); // Mendapatkan jumlah pecahan uang tersebut
        $banyakPecahan[$pecahan] = $jumlahPecahan; // Menyimpan jumlah pecahan uang tersebut ke dalam array
        $jumlahUang %= $pecahan; // Mengupdate sisa jumlah uang yang belum terpecah
    }

    // Menampilkan banyaknya masing-masing pecahan uang yang diperoleh Ani dari Bank
    foreach ($banyakPecahan as $pecahan => $jumlah) {
        echo "Pecahan Rp. " . number_format($pecahan, 0, ',', '.') . ",-: " . $jumlah . " lembar<br>";
    }
    ?>
</body>
</html>