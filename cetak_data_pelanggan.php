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

           					<table class="table" align="center" style="border-collapse:collapse" border="1" width="800">
		                          <thead>
		                          <tr>
		                              <th>#</th>
		                              <th>NAMA PELANGGAN</th>
		                              <th>ALAMAT</th>
		                              <th>NO. HP</th>
                                      <th>TANGGAL MENDAFTAR</th>
		                          </tr>
		                          </thead>
                                  
		                          <tbody>
                                  <?php
                              		include("koneksi.php");
                                    $data=mysql_query("select * from pelanggan");
									$jumlah_data=mysql_num_rows($data);
									$no=1;
                                    while($ulang_data=mysql_fetch_assoc($data) and $no<=$jumlah_data){
                              		?>
		                          <tr>
		                              <td><?php echo $no; $no++; ?></td>
		                              <td><?php echo $ulang_data['nama_pelanggan']; ?></td>
		                              <td><?php echo $ulang_data['alamat_pelanggan']; ?></td>
		                              <td align="center"><?php echo $ulang_data['no_hp_pelanggan']; ?></td>
                                      <td align="center"><?php echo $ulang_data['tanggal_daftar_pelanggan']; ?></td>
		                          </tr>
                                  <?php } ?>
		                          </tbody>
		                      </table>

</body>