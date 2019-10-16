<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
</head>
<body>
	<center>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($pegawai as $u) { ?>
	<form action="<?php echo base_url(). 'index.php/belajarcrud/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>

				<td>Nama</td>
				<td>
					<input type="hidden" name="NIP" value="<?php echo $u->NIP ?>">
					<input type="text" name="nama" value="<?php echo $u->Nama ?>">
				</td>
			</tr>
			<tr>
				<td>golongan</td>
				<td><input type="text" name="golongan" value="<?php echo $u->golongan ?>"></td>
			</tr>			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"s>
				<input type="reset" value="Reset"s></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>