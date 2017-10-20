
<!DOCTYPE html>
<html>
<head>
	<title>Mata Kuliah | Input</title>
</head>
<link rel="stylesheet" type="text/css" href="../asset/style.css">
<body>
	<nav>
		<ul class="kiri">
			<img src="../asset/dp_logo.png" />
		</ul>
		<ul class="kanan">
			<li><a href="">Hello, Agus Sukriawinata</a></li>
			<div style="clear:both"></div>
		</ul>
	</nav>
		<div class="sidebar">
				<ul>
					<li><a href="../home.php">Dashboard</a></li>
					<li><a href="../dosen/tampil_dosen.php">Data Dosen</a></li>
					<li><a href="../mahasiswa/tampil_mahasiswa.php">Data Mahasiswa</a></li>
					<li><a href="../matkul/tampil_matkul.php">Data Mata Kuliah</a></li>
				</ul>
			</div>
		<div class="main">
			<div class="isimain">
				<span class="span">Form Input Data Mata Kuliah</span>
					<form action="../matkul/input_matkul_aksi.php" method="POST">
						<table width="800">
							<tr>
								<td>Kode Mata Kuliah</td>
								<td>
									<input type="text" name="kd_matkul" id="kd_matkul" placeholder="Masukan Mata Kuliah" required />
									<input type="text" name="id_matkul" id="id_matkul" hidden>
								</td>
							</tr>
							<tr>
								<td>Nama Mata Kuliah </td>
								<td><input type="text" name="nm_matkul" id="nm_matkul" placeholder="Nama Mata Kuliah" required /></td>
							</tr>
							<tr>
								<td>Jumlah SKS </td>
								<td><input type="text" name="jml_sks" id="jml_sks" placeholder="Jumlah SKS" required /></td>
							</tr>
							<tr>
								<td></td>
								<td>
									<input type="submit" value="Simpan Data">
									<input type="reset" onclick="window.location='../matkul/tampil_matkul.php';" value="Batal">
								</td>
							</tr>
						</table>
					</form>
			</div>
		</div>
</body>
</html>
