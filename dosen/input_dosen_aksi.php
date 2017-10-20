<?php 
	include '../config/koneksi.php';
?>

<?php 
	$id_dosen 		= 	$_POST['id_dosen'];
	$nid	 		= 	$_POST['nid'];
	$nm_dosen 		= 	$_POST['nm_dosen'];
	$alamat_dosen 	=	$_POST['alamat_dosen'];
	$no_tlp_dosen 	=	$_POST['no_tlp_dosen'];

	$data 	=	mysql_query("INSERT INTO dosen VALUES('$id_dosen','$nid','$nm_dosen','$alamat_dosen','$no_tlp_dosen')") or die(mysql_error());{
?>
	<script>
		alert("Data Dosen Berhasil Disimpan");
		window.location.href='../dosen/tampil_dosen.php';

	</script>
	<?php 
		}

 ?>