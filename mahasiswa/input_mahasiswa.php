
<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa | Input</title>
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
				<span class="span">Form Input Data Mahasiswa</span>
					<form action="../mahasiswa/input_mahasiswa_aksi.php" method="POST">
						<table width="800">
							<tr>
								<td>NIM </td>
								<td>
									<input type="text" name="nim" id="nim" placeholder="Masukan NIM" required />
									<input type="text" name="id_mhs" id="id_mhs" hidden>
								</td>
							</tr>
							<tr>
								<td>Nama Mahasiswa </td>
								<td><input type="text" name="nm_mhs" id="nm_mhs" placeholder="Nama Mahasiswa" required /></td>
							</tr>
							<tr>
								<td>Alamat </td>
								<td><input type="text" name="alamat" id="alamat" placeholder="Alamat" required /></td>
							</tr>
							<tr>
								<td>No. Handphone </td>
								<td><input type="text" name="no_tlp" id="no_tlp" placeholder="No. Handphone" required /></td>
							</tr>
							<tr>
								<td>Jurusan </td>
								<td><input type="text" name="jurusan" id="jurusan" placeholder="Jurusan" required /></td>
							</tr>
							<tr>
								<td></td>
								<td>
									<input type="submit" value="Simpan Data">
									<input type="reset" onclick="window.location='../mahasiswa/tampil_mahasiswa.php';" value="Batal">
								</td>
							</tr>
						</table>
					</form>
			</div>
		</div>
</body>
</html>
