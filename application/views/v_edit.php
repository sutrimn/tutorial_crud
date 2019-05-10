<!DOCTYPE html>
<html>
<head>
	<title>Crud</title>
</head>
<body>

<h1>Belajar CRUD Cepat Gapaker Ribet</h1>
<h3>Bareng Sutriman</h3>
<br>
<h4>Tambah Data</h4>
<form method="post" action="">
	<?php foreach ($buah->result() as $b) {?>
	<input type="text" name="nama_buah" placeholder="nama buah" value="<?=$b->buahNama?>">
	<input type="number" name="jumlah_buah" placeholder="jumlah buah" value="<?=$b->buahJumlah?>">
<?php } ?>
	<button type="submit">Tambah</button>
</form>
</body>
</html>