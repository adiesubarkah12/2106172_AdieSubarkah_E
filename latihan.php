<!DOCTYPE html>
<html>
<head>
    <title>Grade Nilai Doni</title>
</head>
<body>
    <form method="post" action="">
        <table>
            <tr>
                <td>Input Nilai Doni:</td>
                <td><input type="number" name="nilai" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="simpan">Simpan</button>
                    <button type="reset">Cancel</button>
                </td>
            </tr>
        </table>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai dari form
        $nilai = $_POST["nilai"];
        // Mendefinisikan ketentuan nilai dan grade dalam array
        $ketentuanGrade = [
            20 => "E",
            40 => "D",
            60 => "C",
            80 => "B",
        ];
        // Menentukan grade berdasarkan nilai
        $grade = "A"; // Default grade
        foreach ($ketentuanGrade as $batasNilai => $nilaiGrade) {
            if ($nilai <= $batasNilai) {
                $grade = $nilaiGrade;
                break;
            }
        }
        // Menampilkan hasil grade
        echo "<br><br>";
        echo "<table border='1'>";
        echo "<tr><td>Nilai Doni</td><td>Grade</td></tr>";
        echo "<tr><td>$nilai</td><td>$grade</td></tr>";
        echo "</table>";
    }
    ?>
</body>
</html>
