<?php
	include ("stop.php");
	include ("koneksi.php");
	extract($_GET);
	
	if(isset($nilai)){
		$tampil_a=mysql_query("select * from studio where id_studio='$id_studio'");
		$arr_tampil_a=mysql_fetch_assoc($tampil_a);
		$file_a = "foto_studio/$arr_tampil_a[foto_studio]";     
		unlink($file_a);
		
		$hapus=mysql_query("delete from studio where id_studio='$id_studio'");
		header("Location:tampil_data_harga_record.php");
		exit();
	}
	
	if(isset($id_studio)){
	echo "
		<script type=\"text/javascript\">
			<!--
			
			var answer = confirm (\"Yakin akan dihapus ? \")
			if (answer)
document.location.href='hapus_data_harga_record.php?nilai=1&id_studio=$id_studio';
			else
			document.location.href='tampil_data_harga_record.php';
			
			// -->
		</script> ";
	}
?>