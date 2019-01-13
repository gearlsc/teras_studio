<?php 
	session_start();
	if(!isset($_SESSION ['username']) && !isset($_SESSION ['password'])){
		echo "
			<SCRIPT language=\"Javascript\"> 
				<!-- 
					alert(\"Silahkan login untuk masuk ke halaman ini !\"); 
					document.location.href = 'index.php';
				// --> 
			</SCRIPT>";
	}
?>