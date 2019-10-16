<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<center>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo site_url('belajarcrud/tambah_aksi'); ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>no</td>
				<td><input type="text" name="no"></td>
			</tr>
				<td>NIP</td>
				<td><input type="text" name="NIP"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>golongan</td>
				<td><input type="text" name="golongan"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah">
					<input type="reset" value="Reset"></td>
			</tr>
		</table>
	</form>	
</body>
</html>