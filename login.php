<?php 
	session_start(); 
	include("koneksi.php");
	extract($_POST);
	$admin=mysql_query("select * from administrator where username='$username' and password='$password'");
	$nilai=mysql_num_rows($admin);
	$arr_admin=mysql_fetch_assoc($admin);
		if($nilai==1){                                                    
			$_SESSION ['username']=$arr_admin[username];  
			$_SESSION ['password']=$arr_admin[password]; 
            $_SESSION ['nama_admin']=$arr_admin[nama_admin]; 
			echo "
				<SCRIPT language=\"Javascript\"> 
					<!-- 
						alert(\"Selamat datang $arr_admin[nama_admin]!\"); 
						document.location.href = 'home_admin.php';
					// --> 
				</SCRIPT>";
		}                                                           
		else{   
			echo "
				<SCRIPT language=\"Javascript\"> 
					<!-- 
						alert(\"Username dan password tidak valid, silahkan ulangi !\"); 
						document.location.href = 'index.php';
					// --> 
				</SCRIPT>";
		}
?>