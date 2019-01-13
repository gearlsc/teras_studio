<?php
	include ("koneksi.php");
	extract($_POST);

	if($promo=='' or $keterangan_promo=='' or $status_aktif_promo==''){
		echo "
		<SCRIPT language=\"Javascript\"> 
			 alert(\"Data tidak disimpan, lengkapi form input !\"); 
			 document.location.href = 'input_data_promo.php';
		</SCRIPT>";
	}
	else{
		mysql_query("insert into informasi_promo values(0,'$promo','$keterangan_promo','$status_aktif_promo')");
		
		
				echo "
		<SCRIPT language=\"Javascript\"> 
			 alert(\"Data Promo Telah Disimpan !\"); 
			 document.location.href = 'input_data_promo.php';
		</SCRIPT>";
	}
?>