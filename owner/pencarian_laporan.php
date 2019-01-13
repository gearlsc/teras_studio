<?php 
	include("stop.php");
	extract($_POST);
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
    
    <link href="search/style.css" rel="stylesheet">
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
                  	  <h4 class="mb"><i class="fa fa-tasks"></i> PENCARIAN DATA LAPORAN TRANSAKSI TERAS STUDIO</h4>

                      
                    
                    
                    
<?php 
	include("koneksi.php");
    if(isset($bulan)){
    	$tanggal="$bulan-$tahun";
    	$studio=mysql_query("select * from studio a,transaksi b, pelanggan c where a.id_studio=b.id_studio and c.id_pelanggan=b.id_pelanggan and tanggal_booking like '%$tanggal' order by b.id_transaksi desc");
    }else{
		$studio=mysql_query("select * from studio a,transaksi b, pelanggan c where a.id_studio=b.id_studio and c.id_pelanggan=b.id_pelanggan order by b.id_transaksi desc");
    }
?>                    
                    <table width="759" border="1" class="order-table">
  
    
     <input type="search" class="light-table-filter" data-table="order-table" placeholder="Masukan Kata Kunci" />
  <BR /><BR />
  <thead>
  <tr style="font-weight:bold" bgcolor="#FFFFCC">
    <th><div align="center">NAMA PELANGGAN</div></th>
    <th><div align="center">TANGGAL</div></th>
    <th><div align="center">LAMA JAM</div></th>
    <th><div align="center">CHECK IN</div></th>
    <th><div align="center">CHECK OUT</div></th>
    <th><div align="center">RENTAL</div></th>
    <th><div align="center">TOTAL BAYAR</div></th>
    </tr>
    </thead>
    <?php 
    	$hitung=mysql_num_rows($studio);
    	while($ulang_studio=mysql_fetch_assoc($studio)){ 
    	$total = number_format($ulang_studio['total_bayar'], 0, ',', '.'); 
		$total_semua=$ulang_studio['total_bayar']+$total_semua;
		$rp_total_semua = number_format($total_semua, 0, ',', '.'); 
	?>
    <tbody>
  <tr style="font-size:16px; font-family:Verdana, Arial, Helvetica, sans-serif">
    <td><div align="left">&nbsp;<?php echo $ulang_studio['nama_pelanggan']; ?></div></td>
    <td><div align="center"><?php echo $ulang_studio['tanggal_booking']; ?></div></td>
    <td><div align="center"><?php echo $ulang_studio['total_jam']; ?></div></td>
    <td><div align="center"><?php echo $ulang_studio['jam_mulai']; ?></div></td>
    <td><div align="center"><?php echo $ulang_studio['jam_selesai']; ?></div></td>
    <td><div align="center"><?php echo $ulang_studio['rental']; ?></div></td>
    <td><div align="right"><?php echo "Rp.$total,-"; ?>&nbsp;</div></td>
   </tr>
   </tbody>
   
    <?php } ?>
   <tr style="font-size:16px; font-family:Verdana, Arial, Helvetica, sans-serif">
    <td colspan="6"><div align="left">&nbsp;</div>      <div align="center"></div>      <div align="center"></div>      <div align="center"></div>      <div align="center"></div></td>
    <td><div align="right"><b><?php echo "Rp.$rp_total_semua,-"; ?></b>&nbsp;</div></td>
    </tr>
</table>

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
