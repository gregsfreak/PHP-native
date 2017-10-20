<?php 
	include '../config/koneksi.php';
?>

<?php 
	$id_matkul 	= 	$_POST['id_matkul'];
	$kd_matkul	= 	$_POST['kd_matkul'];
	$nm_matkul 	=	$_POST['nm_matkul'];
	$jml_sks 	=	$_POST['jml_sks'];

	$data 	=	mysql_query("INSERT INTO matkul VALUES('$id_matkul','$kd_matkul','$nm_matkul','$jml_sks')") or die(mysql_error());{
?>
	<script>
		alert("Data Dosen Berhasil Disimpan");
		window.location.href='../matkul/tampil_matkul.php';

	</script>
	<?php 
		}

 ?>