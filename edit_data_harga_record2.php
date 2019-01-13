<?php
	include ("stop.php");
	include ("koneksi.php");
	extract($_POST);
	$lokasi_file_a = $_FILES['foto_studio']['tmp_name'];
	$nama_file_a = $_FILES['foto_studio']['name'];

	//jika file tidak diganti
	if (empty($lokasi_file_a)){
		$update_menu=mysql_query("update studio set nama_studio='$nama_studio',tarif_studio='$tarif_studio',fasilitas_studio='$fasilitas_studio',keterangan='$keterangan' where id_studio='$id_studio'");
	}
	else {
		$hapus_a=mysql_query("select foto_studio from studio where id_studio='$id_studio'");
		$arr_hapus_a=mysql_fetch_assoc($hapus_a);
		$file_a = "./foto_studio/$arr_hapus_a[foto_studio]";         
		unlink($file_a);
		
		
	
		$update_menu=mysql_query("update studio set nama_studio='$nama_studio',tarif_studio='$tarif_studio',fasilitas_studio='$fasilitas_studio',keterangan='$keterangan',foto_studio='$nama_file_a' where id_studio='$id_studio'");
		copy($_FILES['foto_studio']['tmp_name'],"./foto_studio/".$_FILES['foto_studio']['name']); 
	}
		
	if(isset($update_menu)){
	echo "
		<SCRIPT language=\"Javascript\"> 
			 alert(\"Data Telah di Edit !\"); 
			 document.location.href = 'tampil_data_harga_record.php';
		</SCRIPT>";
	}
	else 
		echo "Maaf Terjadi Kesalahan,Silahkan Lakukan Penginputan Kembali";

?>