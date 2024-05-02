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
    <!-- huruf nilai 
    c= 0-> 59
    bc=60-> 69
    b=70-> 79
    ab=80->89
    a=90->100   -->

    <h2>Konversi Nilai Angka ke Huruf</h2>
    <form action="" method="post">
        <label for="nilai">Masukkan nilai angka:</label>
        <input type="text" id="nilai" name="nilai">
        <button type="submit">Konversi nilai angka ke huruf: </button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mendapatkan nilai angka dari form
        $nilai = $_POST["nilai"];

        // Fungsi untuk konversi nilai angka ke huruf
        function konversiNilai($nilai) {
            if ($nilai >= 90 && $nilai <= 100) {
                return "A";
            } elseif ($nilai >= 80 && $nilai <= 89) {
                return "AB";
            } elseif ($nilai >= 70 && $nilai <= 79) {
                return "B";
            } elseif ($nilai >= 60 && $nilai <= 69) {
                return "BC";
            } elseif ($nilai >= 0 && $nilai <= 59) {
                return "C";
            } else {
                return "Nilai tidak valid";
            }
        }
        // Memanggil fungsi konversiNilai() dan menampilkan hasil konversi
        $nilaiHuruf = konversiNilai($nilai);
        echo "<p>Nilai angka $nilai setara dengan $nilaiHuruf</p>";
    }
    ?>
</body>
</html>