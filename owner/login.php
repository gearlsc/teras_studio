<?php 
	session_start(); 
	include("koneksi.php");
	extract($_POST);
	$admin=mysql_query("select * from owner where username_owner='$username_owner' and password_owner='$password_owner'");
	$nilai=mysql_num_rows($admin);
	$arr_admin=mysql_fetch_assoc($admin);
		if($nilai==1){                                                    
			$_SESSION ['username_owner']=$arr_admin[username_owner];  
			$_SESSION ['password_owner']=$arr_admin[password_owner]; 
            $_SESSION ['nama_owner']=$arr_admin[nama_owner]; 
			echo "
				<SCRIPT language=\"Javascript\"> 
					<!-- 
						alert(\"Selamat datang $arr_admin[nama_owner]!\"); 
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