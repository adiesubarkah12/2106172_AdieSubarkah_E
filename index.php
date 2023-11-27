<!DOCTYPE html>
<html lang="en">
<head>
<title>form tamu</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="kotak">
<h1>Tampilan Login </h1>
<form action="addtamu.php" method="post">
<label for="nama">Nama</label>
<input type="text" name="nama" class="form-input" maxlenght="35"
required>

<label for="email">Email</label>
<input type="email" name="email" class="form-input" maxlenght="35" required>

<button type="submit" id="btn-kirim"> KIRIM
</button>
</form>
</div>

</body>
</html>
