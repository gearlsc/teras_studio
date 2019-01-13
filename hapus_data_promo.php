<?php
	include("stop.php");
	include ("koneksi.php");
	extract($_GET);
	if(isset($nilai)){
		$hapus=mysql_query("delete from informasi_promo where id_promo='$id_promo'");
		header("Location:tampil_data_promo.php");
		exit();
	}
	
	if(isset($id_promo)){
	echo "
		<script type=\"text/javascript\">
			<!--
			
			var answer = confirm (\"Yakin akan dihapus ? \")
			if (answer)
document.location.href='hapus_data_promo.php?nilai=1&id_promo=$id_promo';
			else
			document.location.href='tampil_data_promo.php';
			
			// -->
		</script> ";
	}
?>