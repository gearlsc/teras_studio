<?php 
	include("koneksi.php");
    extract($_GET);
    
    $studio=mysql_query("select * from studio a,transaksi b, pelanggan c where a.id_studio=b.id_studio and c.id_pelanggan=b.id_pelanggan and tanggal_booking like '%$tanggal' order by b.id_transaksi desc");
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
<body onLoad="printpage()" background="images/bag_cetak_pelanggan.JPG" style="background-repeat:repeat-y; background-position:center">
							<table width="700" border="0" align="center">
                                <tr>
                                  <td><img src="images/head_cetak.JPG"></td>
                                </tr>
                              </table><br><br>
<div align="center"><h4>LAPORAN TRANSAKSI RENTAL STUDIO/RECORDING <br /><font size="+2">PERIODE <?php if($tanggal==''){ echo "KESELURUHAN";}else{echo $tanggal;} ?></font></h2></div></div>
           					<table class="table" align="center" style="border-collapse:collapse" border="1" width="800">
		                          <thead>
		                          <tr>
		                              <td><div align="center">NAMA PELANGGAN</div></td>
                                        <td><div align="center">TANGGAL</div></td>
                                        <td><div align="center">LAMA JAM</div></td>
                                        <td><div align="center">CHECK IN</div></td>
                                        <td><div align="center">CHECK OUT</div></td>
                                        <td><div align="center">RENTAL</div></td>
                                        <td><div align="center">TOTAL BAYAR</div></td>
		                          </tr>
		                          </thead>
                                  
		                          <tbody>
    <?php 
    	$hitung=mysql_num_rows($studio);
		if($hitung<1){ echo "<tr><td colspan=6 align=center>TIDAK DITEMUKAN LAPORAN DI BULAN-TAHUN INI</td></tr>"; }else{
    	while($ulang_studio=mysql_fetch_assoc($studio)){ 
    	$total = number_format($ulang_studio['total_bayar'], 0, ',', '.'); 
		$total_semua=$ulang_studio['total_bayar']+$total_semua;
		$rp_total_semua = number_format($total_semua, 0, ',', '.'); 
	?>
  <tr style="font-size:16px; font-family:Verdana, Arial, Helvetica, sans-serif">
    <td><div align="left">&nbsp;<?php echo $ulang_studio['nama_pelanggan']; ?></div></td>
    <td><div align="center"><?php echo $ulang_studio['tanggal_booking']; ?></div></td>
    <td><div align="center"><?php echo $ulang_studio['total_jam']; ?></div></td>
    <td><div align="center"><?php echo $ulang_studio['jam_mulai']; ?></div></td>
    <td><div align="center"><?php echo $ulang_studio['jam_selesai']; ?></div></td>
    <td><div align="center"><?php echo $ulang_studio['rental']; ?></div></td>
    <td><div align="right"><?php if($ulang_studio['total_bayar']==0){ echo "GRATIS"; }else{ echo "Rp.$total,-"; } ?>&nbsp;</div></td>
   </tr>
   
    <?php }} ?>
   <tr style="font-size:16px; font-family:Verdana, Arial, Helvetica, sans-serif">
    <td colspan="6"><div align="left">&nbsp;</div>      <div align="center"></div>      <div align="center"></div>      <div align="center"></div>      <div align="center"></div></td>
    <td><div align="right"><b><?php echo "Rp.$rp_total_semua,-"; ?></b>&nbsp;</div></td>
    </tr>
		                          </tbody>
		                      </table>

</body>