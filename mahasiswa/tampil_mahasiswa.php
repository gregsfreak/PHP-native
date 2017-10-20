<?php 
include '../config/koneksi.php';
 ?>
<html>
<head>
<title>Home | Mahasiswa</title>
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
				<a href="input_mahasiswa.php"><input type="submit" value="Tambah Data Mahasiswa"></a>
				<tr>
					<th>No</th>
					<th>NIM</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>No. Handphone</th>
					<th>Jurusan</th>
					<th>Aksi</th>
				</tr>
				<?php 
					$data="SELECT * FROM mahasiswa ORDER BY id_mhs";
					$qrydata = mysql_query($data);
					$no=0;
					
					while ($datatampil = mysql_fetch_array($qrydata)) {
						$id = $datatampil['id_mhs'];
						$no++
				?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $datatampil['nim']; ?></td>
						<td><?php echo $datatampil['nm_mhs']; ?></td>
						<td><?php echo $datatampil['alamat']; ?></td>
						<td><?php echo $datatampil['no_tlp']; ?></td>
						<td><?php echo $datatampil['jurusan']; ?></td>
						<td><a href='edit_mahasiswa.php?id=<?php echo $datatampil['id_mhs'];?>'>Edit</a><span> | </span><a href='hapus_mahasiswa.php?id=<?php echo $datatampil['id_mhs'];?>'>Hapus</a></td>
					 </tr>
				<?php } ?>

			</table>	
		</div>
	</div>
</body>
</html>