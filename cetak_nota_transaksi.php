<?php
	include("stop.php");
    include("koneksi.php");
    extract($_POST);
	
	extract($_GET);
	$x=mysql_query("select * from transaksi where id_pelanggan='".$_SESSION['id_pelanggan']."'");
	$arr_x=mysql_num_rows($x);
	$dat=$arr_x+1;
		if($dat==11 or $dat==22 or $dat==33){ 
			$t=0; 
		}else{ 
			$t=$_SESSION['total_bayar'];
			if($uang_diterima<$t){
				echo "
				<SCRIPT language=\"Javascript\"> 
					 alert(\"Uang yang anda input tidak mencukupi pembayaran !\"); 
					 document.location.href = 'trans_rental_studio.php';
				</SCRIPT>";
				exit();
			}
		}
	
	mysql_query("insert into transaksi values(0,'".$_SESSION['id_pelanggan']."','".$_SESSION['id_studio']."','".$_SESSION['tanggal_booking']."','".$_SESSION['jam_mulai']."','".$_SESSION['time']."','".$_SESSION['total_jam']."','$t','".$_SESSION['nama_admin']."',now())");
?>
<script language="Javascript1.2">
	<!--
 	function printpage() {
	window.print();
	}
	//-->
</script>
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
.style2 {font-family: "Times New Roman", Times, serif}
.style4 {font-size: 10px}
-->
</style>
<body onLoad="printpage()" background="images/bag_cetak_nota.JPG" style="background-repeat:repeat-y; background-position:center">
							<table width="600" border="0" align="center">
                                <tr>
                                  <td><img src="images/head_cetak_nota.JPG"></td>
                                </tr>
                                
</table>

           					<?php
                              		include("koneksi.php");
                                    $data=mysql_query("select * from transaksi a,pelanggan b,studio c where a.id_pelanggan=b.id_pelanggan and a.id_studio=c.id_studio order by a.id_transaksi desc");
                                    $ulang_data=mysql_fetch_assoc($data);
                                    $harga = number_format($ulang_data[tarif_studio], 0, ',', '.');
                                    $fasilitas=nl2br($ulang_data['fasilitas_studio']);
                              ?>
                              
                         
	                  	  	  
	                  	  	  
                              
                              
              <table width="580" border="0" align="center">
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Nomor : TS<?php echo $ulang_data['id_transaksi']; ?> / Ruang : <b><?php echo $ulang_data['nama_studio']; ?></b></td>
                  </tr>
                  <tr>
                    <td width="84">&nbsp;</td>
                    <td width="149">Nama Pelanggan</td>
                    <td width="21"><div align="center">:</div></td>
                    <td width="408"><?php echo $ulang_data['nama_pelanggan']; ?></td>
                </tr>
                  <tr>
                    <td width="84">&nbsp;</td>
                    <td width="149">Tanggal Rental</td>
                    <td width="21"><div align="center">:</div></td>
                    <td width="408"><?php echo $ulang_data['tanggal_booking']; ?></td>
                </tr>
                  <tr>
                    <td width="84">&nbsp;</td>
                    <td width="149">Lama Jam Rental</td>
                    <td width="21"><div align="center">:</div></td>
                    <td width="408"><?php echo $ulang_data['total_jam']; ?> Jam</td>
                </tr>
                 <tr>
                    <td width="84">&nbsp;</td>
                    <td width="149">Tarif Studio</td>
                    <td width="21"><div align="center">:</div></td>
                    <td width="408"><?php echo "@ Rp.$harga,-/Jam"; ?></td>
                </tr>
                <tr>
                    <td width="84">&nbsp;</td>
                    <td width="149">Total Bayar</td>
                    <td width="21"><div align="center">:</div></td>
                    <td width="408"><?php $total = number_format($ulang_data[total_bayar], 0, ',', '.'); echo "Rp.$total,-"; ?></td>
                </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>Uang Diterima</td>
                    <td><div align="center">:</div></td>
                    <td><?php $uang = number_format($uang_diterima, 0, ',', '.'); echo "Rp.$uang,-"; ?></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>Kembalian</td>
                    <td><div align="center">:</div></td>
                    <td><?php $kembalian=$uang_diterima-$ulang_data[total_bayar]; $kembali = number_format($kembalian, 0, ',', '.'); echo "Rp.$kembali,-"; ?></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="84">&nbsp;</td>
                    <td width="149">Check In</td>
                    <td width="21"><div align="center">:</div></td>
                    <td width="408"><b><?php echo $ulang_data['jam_mulai']; ?></b></td>
                </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>Check Out</td>
                    <td><div align="center">:</div></td>
                    <td><b><?php echo $ulang_data['jam_selesai']; ?></b></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>No. Kedatangan</td>
                    <td><div align="center">:</div></td>
                    <td><b><?php $dat=$arr_x+1; echo $dat; if($dat==11 or $dat==22 or $dat==33){ echo " - Rental Gratis 1 Jam"; } ?></b></td>
                  </tr>
                  <tr>
                    <td width="84">&nbsp;</td>
                    <td width="149">&nbsp;</td>
                    <td width="21">&nbsp;</td>
                    <td width="408">&nbsp;</td>
                </tr>
			</table>



<table width="700" border="0" align="center">
                <tr>
                  <td width="87">&nbsp;</td>
                  <td width="201">&nbsp;</td>
                  <td width="44">&nbsp;</td>
                  <td width="54">&nbsp;</td>
                  <td width="10">&nbsp;</td>
                  <td width="188">&nbsp;</td>
                  <td width="86">&nbsp;</td>
                </tr>
                <tr>
                  <td height="26">&nbsp;</td>
                  <td><div align="center">Owner</div></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><div align="center">Operator</div></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><div align="center"></div></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><div align="center"></div></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><div align="center"></div></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><div align="center"></div></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><div align="center"></div></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><div align="center"></div></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><div align="center"><u>Aley Angsa</u></div></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><div align="center"><u><?php echo $_SESSION['nama_admin']; ?></u></div></td>
                  <td>&nbsp;</td>
                </tr>
              </table>
<p>&nbsp;</p>
</body>
