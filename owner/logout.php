<?php 
session_start(); 
extract($_GET);  
if(isset($nilai)){                                 
		session_unset();                                     
		session_destroy();                                  
		$_SESSION=array();  
		echo "
			<SCRIPT language=\"Javascript\"> 
				 document.location.href = 'index.php';
			</SCRIPT>";
		exit();
	}                          
		
		echo "
		<script type=\"text/javascript\">
			<!--
			
			var answer = confirm (\"Yakin akan keluar ? \")
			if (answer)
document.location.href='logout.php?nilai=1';
			else
			document.location.href='home_admin.php';
			
			// -->
		</script> ";
?>