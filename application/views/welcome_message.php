<!DOCTYPE html>
<html>
<head>
	<title>Crud</title>
</head>
<body>

<h1>Belajar CRUD Cepat Gapaker Ribet</h1>
<h3>Bareng Sutriman</h3>
<br>
<a href="<?php echo site_url('welcome/tambah')?>">Tambah</a>
<table border="1">
	<thead>
		<th>No</th>
		<th>Nama Buah</th>
		<th>Jumlah</th>
		<th>Pilihan</th>
	</thead>
	<tbody>
		<?php $no= 1; foreach ($buah->result() as $b) {?>
		<tr>
			<td><?=$no++;?></td>
			<td><?=$b->buahNama;?></td>
			<td><?=$b->buahJumlah;?></td>
			<td>
				<a href="<?php echo site_url('welcome/edit/'.$b->idbuah);?>">Edit</a>
				<a href="<?php echo site_url('welcome/delete/'.$b->idbuah);?>">Hapus</a>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>
</body>
</html>