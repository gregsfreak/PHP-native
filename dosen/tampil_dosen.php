<?php 
include '../config/koneksi.php';
 ?>

<html>
<head>
<title>Home | Dosen</title>
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
				<a href="../dosen/input_dosen.php"><input type="submit" value="Tambah Data Dosen"></a>
				<tr>
					<th>No</th>
					<th>NId</th>
					<th>Nama Dosen</th>
					<th>Alamat</th>
					<th>No. Handphone</th>
					<th>Aksi</th>
				</tr>
				<?php 
					$data="SELECT * FROM dosen ORDER BY id_dosen";
					$qrydata = mysql_query($data);
					$no=0;
					
					while ($datatampil = mysql_fetch_array($qrydata)) {
						$id = $datatampil['id_dosen'];
						$no++
				?>
					<tr>
						<td><?php echo $no ?></td>
						<td><?php echo $datatampil['nid']; ?></td>
						<td><?php echo $datatampil['nm_dosen']; ?></td>
						<td><?php echo $datatampil['alamat_dosen']; ?></td>
						<td><?php echo $datatampil['no_tlp_dosen']; ?></td>
						<td><a href="../dosen/edit_dosen.php?id=<?php echo $datatampil['id_dosen']; ?>">Edit</a ><span> | </span> <a href="../dosen/hapus_dosen.php?id=<?php echo $datatampil['id_dosen'];?>">Hapus</a></td>
					 </tr>
				<?php	} ?>

			</table>	
		</div>
	</div>
</body>
</html>