<?php
	include("stop.php");
	include ("koneksi.php");
	extract($_GET);
	if(isset($nilai)){
		$hapus=mysql_query("delete from pelanggan where id_pelanggan='$id_pelanggan'");
		header("Location:tampil_data_pelanggan.php");
		exit();
	}
	
	if(isset($id_pelanggan)){
	echo "
		<script type=\"text/javascript\">
			<!--
			
			var answer = confirm (\"Yakin akan dihapus ? \")
			if (answer)
document.location.href='hapus_data_pelanggan.php?nilai=1&id_pelanggan=$id_pelanggan';
			else
			document.location.href='tampil_data_pelanggan.php';
			
			// -->
		</script> ";
	}
?>