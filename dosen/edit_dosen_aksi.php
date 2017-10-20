<?php 
include '../config/koneksi.php';
?>

<?php			
			$id_dosen 		= 	$_POST['id_dosen'];
			$nid	 		= 	$_POST['nid'];
			$nm_dosen 		= 	$_POST['nm_dosen'];
			$alamat_dosen 	=	$_POST['alamat_dosen'];
			$no_tlp_dosen 	=	$_POST['no_tlp_dosen'];

		 $query = "UPDATE dosen SET id_dosen = '$id_dosen', nid = '$nid', nm_dosen = '$nm_dosen', alamat_dosen = '$alamat_dosen', no_tlp_dosen = '$no_tlp_dosen' WHERE id_dosen = '$id_dosen'" ;
		 $hasil = mysql_query($query);
?>
	 
<script type="text/javascript">
	alert("Data Berhasil Di ubah");
	window.location.href='../dosen/tampil_dosen.php';
 </script>
