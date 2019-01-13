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
<body onLoad="printpage()" background="images/bag_cetak.JPG" style="background-repeat:repeat-y; background-position:center">
							<table width="700" border="0" align="center">
                                <tr>
                                  <td><img src="images/head_cetak.JPG"></td>
                                </tr>
                              </table><br><br>

           					<?php
                              		include("koneksi.php");
                                    $data=mysql_query("select * from studio where rental='record'");
                                    while($ulang_data=mysql_fetch_assoc($data)){
                                    $harga = number_format($ulang_data[tarif_studio], 0, ',', '.');
                                    $fasilitas=nl2br($ulang_data['fasilitas_studio']);
                              ?>
                              
                         
	                  	  	  
	                  	  	  
                              
                              
                              <table width="700" border="0" align="center">
  <tr>
    <td width="11">&nbsp;</td>
    <td width="308" rowspan="4" align="center"><p><h4><?php echo $ulang_data['nama_studio']; ?></h4></p>
      <p><img src="foto_studio/<?php echo $ulang_data['foto_studio']; ?>" width="300" height="300" style="margin-right:10PX;"></p></td>
    <td width="499" rowspan="4"><h4>FASILITAS</h4><BR><?php echo "$fasilitas"; ?><br><h4>KETERANGAN</h4><BR><?php echo $ulang_data['keterangan']; ?><br><br>
    <h4>TARIF RECORD</h4><font size="+2" color="#0000FF">&nbsp;&nbsp;<?php echo "Rp. $harga,-"; ?></font></td>
    </tr>
 
  
</table>
<hr width="700">
<?php } ?>

</body>