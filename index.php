<!DOCTYPE html>
<html lang="en">
    <body style="background-color: aqua;"></body>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <style>
        .calculator {
            width: 200px;
            margin: 100px auto;
            text-align: center;

        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            font-size: 18px;
        }
        table {
            width: 100%;
        }
        button {
            width: 100%;
            padding: 10px;
            font-size: 18px;
            margin: 5px;
        }
        .result {
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="calculator">
    <h1>Kalkulator<h1>
    <form method="post">
        <!-- Kotak input untuk hasil 1 -->
        <input type="number" name="angka1" placeholder="Hasil 1" required><br>

        <!-- Kotak input untuk hasil 2 -->
        <input type="number" name="angka2" placeholder="Hasil 2" required><br>

        <!-- Tombol operasi aritmatika -->
        <table>
            <tr>
                <td><button type="submit" name="operator" value="tambah">+</button></td>
                <td><button type="submit" name="operator" value="kurang">-</button></td>
                <td><button type="submit" name="operator" value="kali">×</button></td>
                <td><button type="submit" name="operator" value="bagi">÷</button></td>
            </tr>
        </table>
    </form>

    <!-- Bagian untuk menampilkan hasil -->
    <div class="result">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];
            $operator = $_POST['operator'];

            switch ($operator) {
                case 'tambah':
                    $hasil = $angka1 + $angka2;
                    break;
                case 'kurang':
                    $hasil = $angka1 - $angka2;
                    break;
                case 'kali':
                    $hasil = $angka1 * $angka2;
                    break;
                case 'bagi':
                    if ($angka2 != 0) {
                        $hasil = $angka1 / $angka2;
                    } else {
                        $hasil = "Tidak bisa dibagi dengan nol";
                    }
                    break;
            }
            echo "Hasil: $hasil";
        }
        ?>
    </div>
</div>

</body>
</html>