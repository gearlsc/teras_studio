<?php include ("stop.php");
	include ("koneksi.php");
	extract($_POST);
    $tanggal=date('d-m-Y');
	if($nama_pelanggan=='' or $no_hp_pelanggan=='' or $alamat_pelanggan==''){
		echo "
		<SCRIPT language=\"Javascript\"> 
			 alert(\"Data Pelanggan Tidak Diedit, Lengkapi Pengisian Form !\"); 
			 document.location.href = 'edit_data_pelanggan.php?id_pelanggan=$id_pelanggan';
		</SCRIPT>";
	}
	else{
	$update_menu=mysql_query("update pelanggan set nama_pelanggan='$nama_pelanggan',alamat_pelanggan='$alamat_pelanggan',no_hp_pelanggan='$no_hp_pelanggan' where id_pelanggan=$id_pelanggan"); 
	
	if(isset($update_menu)){
	echo "
		<SCRIPT language=\"Javascript\"> 
			 alert(\"Data Pelanggan Telah Di Edit !\"); 
			 document.location.href = 'tampil_data_pelanggan.php';
		</SCRIPT>";
	}
	else 
		echo "Maaf Terjadi Kesalahan,Silahkan Lakukan Penginputan Kembali";
	}
?>