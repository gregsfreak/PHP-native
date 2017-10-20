<?php 
include '../config/koneksi.php';
 ?>
 <html>
<head>
<title>Matkul | Edit</title>
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
						<span class="span">Form Edit Data Mata Kuliah</span>
						<form method="POST" action="../matkul/edit_matkul_aksi.php">	
					
			<?php
				$data = "Select * from matkul where id_matkul = '$_GET[id]'";
				$qrydata =mysql_query ($data);
				$datatampil = mysql_fetch_array ($qrydata);
			?>			
						
							<table width="800">
								<tr>
									<td>Kode Matkul </td>
									<td>
										<input type="text" name="kd_matkul" id="kd_matkul" value="<?php echo $datatampil['kd_matkul'];?>" />
										<input type="text" name="id_matkul" id="id_matkul" value="<?php echo $datatampil['id_matkul'];?>" hidden>
									</td>
								</tr>
								<tr>
									<td>Nama Mata Kuliah </td>
									<td><input type="text" name="nm_matkul" id="nm_matkul" value="<?php echo $datatampil['nm_matkul'];?>" /></td>
								</tr>
								<tr>
									<td>Jumlah SKS </td>
									<td><input type="text" name="jml_sks" id="jml_sks" value="<?php echo $datatampil['jml_sks'];?>" /></td>
								</tr>
								<tr>
									<td></td>
									<td>
										<input type="submit" value="Ubah Data">
										<input type="reset" onclick="window.location='../matkul/tampil_matkul.php';" value="Batal">
									</td>
								</tr>
							</table>
						</form>	
						
				</div>
		</div>
</body>
</html>
