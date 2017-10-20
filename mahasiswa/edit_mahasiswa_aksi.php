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

		 $query = "UPDATE mahasiswa SET id_mhs = '$id_mhs', nim = '$nim', nm_mhs = '$nm_mhs', alamat = '$alamat', no_tlp = '$no_tlp', jurusan = '$jurusan' WHERE id_mhs = '$id_mhs'" ;
		 $hasil = mysql_query($query);
?>
	 
<script type="text/javascript">
	alert("Data Berhasil Di ubah");
	window.location.href='../mahasiswa/tampil_mahasiswa.php';
 </script>
