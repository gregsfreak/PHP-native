<?php 
include '../config/koneksi.php';
?>

<?php			
			$id_matkul 	= 	$_POST['id_matkul'];
			$kd_matkul	= 	$_POST['kd_matkul'];
			$nm_matkul 	= 	$_POST['nm_matkul'];
			$jml_sks 	=	$_POST['jml_sks'];

		 $query = "UPDATE matkul SET id_matkul = '$id_matkul', kd_matkul = '$kd_matkul', nm_matkul = '$nm_matkul', jml_sks = '$jml_sks' WHERE id_matkul = '$id_matkul'" ;
		 $hasil = mysql_query($query);
?>
	 
<script type="text/javascript">
	alert("Data Berhasil Di ubah");
	window.location.href='../matkul/tampil_matkul.php';
 </script>
