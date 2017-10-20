<?php 
include '../config/koneksi.php';
?>

<?php 
		$delete = "Delete from dosen Where id_dosen='$_GET[id]'";  
      
		mysql_query($delete) or die ("Error tu");  
?> 
		
<script type="text/javascript">
	alert("Anda Yakin ??");
	window.location.href="../dosen/tampil_dosen.php";
</script>


