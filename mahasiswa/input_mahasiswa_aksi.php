<?php 
	include '../config/koneksi.php';
?>

<?php 
	$id_mhs 	= 	$_POST['id_mhs'];
	$nim	 	= 	$_POST['nim'];
	$nm_mhs 	= 	$_POST['nm_mhs'];
	$alamat 	=	$_POST['alamat'];
	$no_tlp 	=	$_POST['no_tlp'];
	$jurusan 	=	$_POST['jurusan'];

	$data 	=	mysql_query("INSERT INTO mahasiswa VALUES('$id_mhs','$nim','$nm_mhs','$alamat','$no_tlp','$jurusan')") or die(mysql_error());{
?>
	<script>
		alert("Data Dosen Berhasil Disimpan");
		window.location.href='../mahasiswa/tampil_mahasiswa.php';

	</script>
	<?php 
		}

 ?>