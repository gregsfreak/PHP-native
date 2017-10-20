<?php 
include '../config/koneksi.php';
 ?>
 <html>
<head>
<title>Dosen | Edit</title>
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
						<span class="span">Form Edit Data Dosen</span>
						<form method="POST" action="../dosen/edit_dosen_aksi.php">	
					
			<?php
				$data = "Select * from dosen where id_dosen = '$_GET[id]'";
				$qrydata =mysql_query ($data);
				$datatampil = mysql_fetch_array ($qrydata);
			?>			
						
							<table width="800">
								<tr>
									<td>NId Dosen </td>
									<td>
										<input type="text" name="nid" id="nid" value="<?php echo $datatampil['nid'];?>" />
										<input type="text" name="id_dosen" id="id_dosen" value="<?php echo $datatampil['id_dosen'];?>" hidden>
									</td>
								</tr>
								<tr>
									<td>Nama Dosen </td>
									<td><input type="text" name="nm_dosen" id="nm_dosen" value="<?php echo $datatampil['nm_dosen'];?>" /></td>
								</tr>
								<tr>
									<td>Alamat </td>
									<td><input type="text" name="alamat_dosen" id="alamat_dosen" value="<?php echo $datatampil['alamat_dosen'];?>" /></td>
								</tr>
								<tr>
									<td>No. Handphone </td>
									<td><input type="text" name="no_tlp_dosen" id="no_tlp_dosen" value="<?php echo $datatampil['no_tlp_dosen'];?>" /></td>
								</tr>
								<tr>
									<td></td>
									<td>
										<input type="submit" value="Ubah Data">
										<input type="reset" onclick="window.location='../dosen/tampil_dosen.php';" value="Batal">
									</td>
								</tr>
							</table>
						</form>	
						
				</div>
		</div>
</body>
</html>
