<?php 
	session_start();
	if(!isset($_SESSION ['username_owner']) && !isset($_SESSION ['password_owner'])){
		echo "
			<SCRIPT language=\"Javascript\"> 
				<!-- 
					alert(\"Silahkan login untuk masuk ke halaman ini !\"); 
					document.location.href = 'index.php';
				// --> 
			</SCRIPT>";
	}
?>