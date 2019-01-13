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
	mysql_query("update administrator set nama_admin='$nama_admin',username='$username',password='$password',pertanyaan_keamanan='$pertanyaan_keamanan',jawaban_keamanan='$jawaban_keamanan'");
	
				
	echo "
		<SCRIPT language=\"Javascript\"> 
				alert(\"Data Admin Telah Diubah !\"); 
				document.location.href = 'edit_akun.php';
		</SCRIPT>";
	}
?>