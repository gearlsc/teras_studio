<?php
	include("stop.php");
	include ("koneksi.php");
	extract($_GET);
	if(isset($nilai)){
		$hapus=mysql_query("delete from transaksi where id_transaksi='$id_transaksi'");
		header("Location:data_booking.php");
		exit();
	}
	
	if(isset($id_transaksi)){
	echo "
		<script type=\"text/javascript\">
			<!--
			
			var answer = confirm (\"Yakin akan dihapus ? \")
			if (answer)
document.location.href='hapus_data_booking.php?nilai=1&id_transaksi=$id_transaksi';
			else
			document.location.href='data_booking.php';
			
			// -->
		</script> ";
	}
?>