
<!DOCTYPE html>
<html>
<head>
	<title>Dosen | Input</title>
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
				<span class="span">Form Input Data Dosen</span>
					<form action="../dosen/input_dosen_aksi.php" method="POST">
						<table width="800">
							<tr>
								<td>NId Dosen </td>
								<td>
									<input type="text" name="nid" id="nid" placeholder="Masukan nid" required />
									<input type="text" name="id_dosen" id="id_dosen" hidden>
								</td>
							</tr>
							<tr>
								<td>Nama Dosen </td>
								<td><input type="text" name="nm_dosen" id="nm_dosen" placeholder="Nama Dosen" required /></td>
							</tr>
							<tr>
								<td>Alamat </td>
								<td><input type="text" name="alamat_dosen" id="alamat_dosen" placeholder="Alamat" required /></td>
							</tr>
							<tr>
								<td>No. Handphone </td>
								<td><input type="text" name="no_tlp_dosen" id="no_tlp_dosen" placeholder="No. Handphone" required /></td>
							</tr>
							<tr>
								<td></td>
								<td>
									<input type="submit" value="Simpan Data">
									<input type="reset" onclick="window.location='../dosen/tampil_dosen.php';" value="Batal">
								</td>
							</tr>
						</table>
					</form>
			</div>
		</div>
</body>
</html>
