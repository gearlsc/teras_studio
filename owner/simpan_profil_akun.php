<?php
	include("stop.php");
	include ("koneksi.php");
	extract($_POST);
	
	if(!isset($yakin)){
		echo "
		<SCRIPT language=\"Javascript\"> 
				alert(\"Silahkan setujui perubahan data !\"); 
				document.location.href = 'edit_akun.php';
		</SCRIPT>";
	}else{
	mysql_query("update owner set nama_owner='$nama_owner',username_owner='$username_owner',password_owner='$password_owner',pertanyaan_keamanan_owner='$pertanyaan_keamanan_owner',jawaban_keamanan_owner='$jawaban_keamanan_owner'");
	
				
	echo "
		<SCRIPT language=\"Javascript\"> 
				alert(\"Data Owner Telah Diubah !\"); 
				document.location.href = 'edit_akun.php';
		</SCRIPT>";
	}
?>