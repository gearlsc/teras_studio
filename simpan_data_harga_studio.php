<?php
	include ("stop.php");
	include ("koneksi.php");
	extract($_POST);
	extract($_FILES);
	$lokasi_file_a = $_FILES['foto_studio']['tmp_name'];
	if($nama_studio=='' or $tarif_studio=='' or $fasilitas_studio=='' or $keterangan=='' or $lokasi_file_a==''){
		echo "
		<SCRIPT language=\"Javascript\"> 
			 alert(\"Data tidak disimpan, lengkapi form input !\"); 
			 document.location.href = 'input_data_harga_studio.php';
		</SCRIPT>";
	}
	else{
		copy($_FILES['foto_studio']['tmp_name'],"./foto_studio/".$_FILES['foto_studio']['name']); 
		mysql_query("insert into studio values(0,'$nama_studio','$tarif_studio','$fasilitas_studio','$keterangan','".$_FILES['foto_studio']['name']."','studio')");
		
		
				echo "
		<SCRIPT language=\"Javascript\"> 
			 alert(\"Data Studio Berhasil Ditambah !\"); 
			 document.location.href = 'input_data_harga_studio.php';
		</SCRIPT>";
	}
?>