<?php
	include("stop.php");
    include("koneksi.php");
    extract($_POST);
	
	$studio=mysql_query("select * from studio where id_studio='$id_studio'");
	$arr_studio=mysql_fetch_assoc($studio);
	
    $jam_mulai="$jam:$menit";
	
	$time=$jam.':'.$menit;
	$time = date('H:i', strtotime($time.'+'.$total_jam.' hour'));

	$total_bayar=$arr_studio['tarif_studio'];
	
    $_SESSION['id_pelanggan']=$id_pelanggan;
	$_SESSION['id_studio']=$id_studio;
	$_SESSION['tanggal_booking']=$tanggal_booking;
	$_SESSION['jam_mulai']=$jam_mulai;
	$_SESSION['time']=$time;
	$_SESSION['total_jam']=$total_jam;
	$_SESSION['total_bayar']=$total_bayar;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <?php include("title.php"); ?>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    

    <script src="assets/js/chart-master/Chart.js"></script>
    
    <script type="text/javascript" async="" src="search/script.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <?php include("header.php"); ?>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <?php include("sidebar_left.php"); ?>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">
                  	<div class="row mtbox">
                  	
                    
                    <div class="form-panel" style="position:relative; top:-80px;">
                  	  <h4 class="mb"><i class="fa fa-tasks"></i> KALKULASI PEMBAYARAN</h4>
                      
                            <a href="tambah_transaksi_record.php?id_pelanggan=<?php echo $_SESSION['id_pelanggan']; ?>"><span class="badge bg-primary">Kembali</span></a><br><br>
<?php
                              		include("koneksi.php");
									extract($_POST);
                                    $stud=mysql_query("select * from studio where id_studio='".$_SESSION['id_studio']."'");
                                    $data_stud=mysql_fetch_assoc($stud);
									
									$pelanggan=mysql_query("select * from pelanggan where id_pelanggan='".$_SESSION['id_pelanggan']."'");
                                    $data_pelanggan=mysql_fetch_assoc($pelanggan);
									
                                    $harga = number_format($data_stud[tarif_studio], 0, ',', '.');
									
									$datang=mysql_query("select * from transaksi where id_pelanggan='".$_SESSION['id_pelanggan']."'");
									$jumlah_datang=mysql_num_rows($datang);
                              ?>
                              
                         
	                  	  	  
	                  	  	  
                              
                              
              <table width="669" border="0" align="center" style="font-size:18px">
            <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Ruang  <u><b><?php echo $data_stud['nama_studio']; ?></b></u></td>
                  </tr>
                  <tr>
                    <td width="37">&nbsp;</td>
                    <td width="160">Nama Pelanggan</td>
                    <td width="37"><div align="center">:</div></td>
                    <td width="417"><?php echo $data_pelanggan['nama_pelanggan']; ?></td>
                </tr>
                  <tr>
                    <td width="37">&nbsp;</td>
                    <td width="160">Tanggal Record</td>
                    <td width="37"><div align="center">:</div></td>
                    <td width="417"><?php echo $_SESSION['tanggal_booking']; ?></td>
                </tr>
                  <tr>
                    <td width="37">&nbsp;</td>
                    <td width="160">Lama Jam Record</td>
                    <td width="37"><div align="center">:</div></td>
                    <td width="417"><?php  echo $_SESSION['total_jam']; ?> Jam</td>
                </tr>
                 <tr>
                    <td width="37">&nbsp;</td>
                   <td width="160">Tarif Recording</td>
                   <td width="37"><div align="center">:</div></td>
                   <td width="417"><?php echo "@ Rp.$harga,-/5 Jam"; ?></td>
                </tr>
                <tr>
                    <td width="37">&nbsp;</td>
                  <td width="160">Total Bayar</td>
                  <td width="37"><div align="center">:</div></td>
                  <td width="417"><?php echo "Rp.$harga,-"; ?></td>
                </tr>
                  <tr>
                    <td width="37">&nbsp;</td>
                    <td width="160">Check In</td>
                    <td width="37"><div align="center">:</div></td>
                    <td width="417"><b><?php echo $_SESSION['jam_mulai']; ?></b></td>
                </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>Check Out</td>
                    <td><div align="center">:</div></td>
                    <td><b><?php echo $_SESSION['time']; ?></b></td>
                  </tr>
                 
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td> <a href="cetak_nota_transaksi.php" target="_blank">Cetak Nota</a> </td>
                  </tr>
                  
                  
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><div align="center">&nbsp;</div></td>
                    <td><span class="badge bg-important">Pastikan menerima uang terlebih dahulu</span></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>Terima Uang</td>
                    <td><div align="center">:</div></td>
                    <td>
                    	
                    	<form name="form1" method="post" action="cetak_nota_transaksi_record.php" target="_blank">
                      		<input type="text" name="uang_diterima" id="textfield">
                            <input type="submit" name="Submit" value="Bayar">
                    	</form>
                    </td>
                  </tr>
                
                 
			</table>
            <br><br>
				</div>			 
                  
                  
                    
                  	</div><!-- /row mt -->	
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                 <?php include("sidebar_right.php"); ?>
                 <!-- /col-lg-3 -->
              </div><! --/row -->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <?php include("footer.php"); ?>
      <!--footer end-->
  </section>
  
    <?php include("script_js_bawah.php"); ?>
  </body>
</html>
