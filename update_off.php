<?php 
	session_start(); 
	include("koneksi.php");
	extract($_GET);
    if(isset($nilai)){
		$_SESSION ['id_studio']=$id_studio;  
		$_SESSION ['id_transaksi']=$id_transaksi; 
        $_SESSION ['status']='OFF'; 
        header("Location:data_booking.php?id_studio=$id_studio&nama_studio=$nama_studio");
		exit();
	}
    
    if(isset($id_transaksi)){
	echo "
		<script type=\"text/javascript\">
			<!--
			
			var answer = confirm (\"Status off ? \")
			if (answer)
document.location.href='update_off.php?nilai=1&id_studio=$id_studio&id_transaksi=$id_transaksi&nama_studio=$nama_studio';
			else
			document.location.href='data_booking.php?id_studio=$id_studio&nama_studio=$nama_studio';
			
			// -->
		</script> ";
	}
?>