<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Berat Badan Ideal</title>
</head>
<body>

<h2>Hitung Berat Badan Ideal</h2>
<form method="POST" action="">
    <label for="gender">Jenis Kelamin:</label>
    <select name="gender" id="gender" required>
        <option value="male">Laki-laki</option>
        <option value="female">Perempuan</option>
    </select>
    <br><br>

    <label for="height">Tinggi Badan (cm):</label>
    <input type="number" name="height" id="height" required min="100">
    <br><br>

    <button type="submit" name="calculate">Hitung Berat Badan Ideal</button>
</form>

<?php
if (isset($_POST['calculate'])) {
    $gender = $_POST['gender'];
    $height = $_POST['height'];

    if ($gender == "male") {
        $idealWeight = ($height - 100) - (($height - 100) * 0.10);
    } else {
        $idealWeight = ($height - 100) + (($height - 100) * 0.15);
    }

    echo "<h3>Hasil:</h3>";
    echo "Jenis Kelamin: " . ($gender == "male" ? "Laki-laki" : "Perempuan") . "<br>";
    echo "Tinggi Badan: " . $height . " cm<br>";
    echo "Berat Badan Ideal: " . number_format($idealWeight, 2) . " kg";
}
?>

</body>
</html>
