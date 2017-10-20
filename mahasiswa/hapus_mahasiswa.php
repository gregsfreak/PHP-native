<?php 
include '../config/koneksi.php';
?>

<?php 
		$delete = "Delete from mahasiswa Where id_mhs='$_GET[id]'";  
      
		mysql_query($delete) or die ("Error tu");  
?> 
		
<script type="text/javascript">
	alert("Anda Yakin ??");
	window.location.href="../mahasiswa/tampil_mahasiswa.php";
</script>


