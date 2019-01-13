<?php
	include ("koneksi.php");
	extract($_POST);
    $tanggal=date('d-m-Y');

	if($nama_pelanggan=='' or $no_hp_pelanggan=='' or $alamat_pelanggan==''){
		echo "
		<SCRIPT language=\"Javascript\"> 
			 alert(\"Data tidak disimpan, lengkapi form input !\"); 
			 document.location.href = 'input_data_pelanggan.php';
		</SCRIPT>";
	}
	else{
		mysql_query("insert into pelanggan values(0,'$nama_pelanggan','$alamat_pelanggan','$no_hp_pelanggan','$tanggal')");
		
		
				echo "
		<SCRIPT language=\"Javascript\"> 
			 alert(\"Data Pelanggan Telah Disimpan !\"); 
			 document.location.href = 'input_data_pelanggan.php';
		</SCRIPT>";
	}
?>