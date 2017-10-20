<?php 
include '../config/koneksi.php';
?>

<?php 
		$delete = "Delete from matkul Where id_matkul='$_GET[id]'";  
      
		mysql_query($delete) or die ("Error tu");  
?> 
		
<script type="text/javascript">
	alert("Anda Yakin ??");
	window.location.href="../matkul/tampil_matkul.php";
</script>


