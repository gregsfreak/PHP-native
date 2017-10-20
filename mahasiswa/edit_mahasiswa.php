<?php 
include '../config/koneksi.php';
 ?>
 <html>
<head>
<title>Mahasiswa | Edit</title>
<link rel="stylesheet" type="text/css" href="../asset/style.css">
</head>
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
						<span class="span">Form Edit Data Mahasiswa</span>
						<form method="POST" action="../mahasiswa/edit_mahasiswa_aksi.php">	
					
			<?php
				$data = "Select * from mahasiswa where id_mhs = '$_GET[id]'";
				$qrydata =mysql_query ($data);
				$datatampil = mysql_fetch_array ($qrydata);
			?>			
						
							<table width="800">
								<tr>
									<td>NIM </td>
									<td>
										<input type="text" name="nim" id="nim" value="<?php echo $datatampil['nim'];?>" />
										<input type="text" name="id_mhs" id="id_mhs" value="<?php echo $datatampil['id_mhs'];?>" hidden>
									</td>
								</tr>
								<tr>
									<td>Nama Mahasiswa </td>
									<td><input type="text" name="nm_mhs" id="nm_mhs" value="<?php echo $datatampil['nm_mhs'];?>" /></td>
								</tr>
								<tr>
									<td>Alamat </td>
									<td><input type="text" name="alamat" id="alamat" value="<?php echo $datatampil['alamat'];?>" /></td>
								</tr>
								<tr>
									<td>No. Handphone </td>
									<td><input type="text" name="no_tlp" id="no_tlp" value="<?php echo $datatampil['no_tlp'];?>" /></td>
								</tr>
								<tr>
									<td>Jurusan </td>
									<td><input type="text" name="jurusan" id="jurusan" value="<?php echo $datatampil['jurusan'];?>" /></td>
								</tr>
								<tr>
									<td></td>
									<td>
										<input type="submit" value="Ubah Data">
										<input type="reset" onclick="window.location='../mahasiswa/tampil_mahasiswa.php';" value="Batal">
									</td>
								</tr>
							</table>
						</form>	
						
				</div>
		</div>
</body>
</html>
