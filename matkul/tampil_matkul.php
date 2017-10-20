<?php 
include '../config/koneksi.php';
 ?>
<html>
<head>
<title>Home | Matkul</title>
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

<style type="text/css">
td,th{border:1px solid #ccc;padding:10px;}
table{border-collapse:collapse;}
</style>

	<div class="main">
		<div class="isimain">
			<table>
				<a href="input_matkul.php"><input type="submit" value="Tambah Data Mata Kuliah"></a>
				<tr>
					<th>No</th>
					<th>Kode Mata Kuliah</th>
					<th>Nama Mata Kuliah</th>
					<th>Jumlah SKS</th>
					<th>Aksi</th>
				</tr>
				<?php 
					$data="SELECT * FROM matkul ORDER BY id_matkul";
					$qrydata = mysql_query($data);
					$no=0;
					
					while ($datatampil = mysql_fetch_array($qrydata)) {
						$id = $datatampil['id_matkul'];
						$no++
				?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $datatampil['kd_matkul']; ?></td>
						<td><?php echo $datatampil['nm_matkul']; ?></td>
						<td><?php echo $datatampil['jml_sks']; ?></td>
						<td><a href='edit_matkul.php?id=<?php echo $datatampil['id_matkul'];?>'>Edit</a><span> | </span><a href='hapus_matkul.php?id=<?php echo $datatampil['id_matkul'];?>'>Hapus</a></td>
					 </tr>
						<?php
					}
				 ?>

			</table>	
		</div>
	</div>
</body>
</html>