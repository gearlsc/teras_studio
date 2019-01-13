<?php include("stop.php"); ?>
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
                  	  <h4 class="mb"><i class="fa fa-tasks"></i> DATA TRANSAKSI RENTAL STUDIO</h4>
<?php 
	include("koneksi.php");
	$data=mysql_query("select * from studio where rental='studio'");
	while($ulang_data=mysql_fetch_assoc($data)){
?>
                      <a href="data_booking.php?id_studio=<?php echo $ulang_data['id_studio']; ?>&nama_studio=<?php echo $ulang_data['nama_studio']; ?>"><i class="fa fa-clock-o"></i>&nbsp;<span class="badge bg-primary"><?php echo $ulang_data['nama_studio']; ?></span></a>&nbsp;&nbsp;&nbsp;
<?php } ?>
					<br /><br /><br>
                    
                    
                    
<?php 
	extract($_GET);
    if(isset($id_studio)){
		$studio=mysql_query("select * from studio a,transaksi b, pelanggan c where a.id_studio='$id_studio' and a.id_studio=b.id_studio and c.id_pelanggan=b.id_pelanggan order by b.id_transaksi desc");
?>                    
                    <table width="759" border="1">
  <tr>
    <td colspan="7" align="left" bgcolor="#CCCCCC"><span class="badge bg-important"><font size="+1"><?php echo $nama_studio; ?></font></span></td>
    </tr>
  <tr style="font-weight:bold" bgcolor="#FFFFCC">
    <td><div align="center">NAMA PELANGGAN</div></td>
    <td><div align="center">TANGGAL</div></td>
    <td><div align="center">LAMA JAM</div></td>
    <td><div align="center">CHECK IN</div></td>
    <td><div align="center">CHECK OUT</div></td>
    <td><div align="center">TOTAL BAYAR</div></td>
    <td><div align="center">STATUS</div></td>
    </tr>
    <?php while($ulang_studio=mysql_fetch_assoc($studio)){ 
    $total = number_format($ulang_studio['total_bayar'], 0, ',', '.'); ?>
  <tr style="font-size:16px; font-family:Verdana, Arial, Helvetica, sans-serif">
    <td><div align="left">&nbsp;<?php echo $ulang_studio['nama_pelanggan']; ?></div></td>
    <td><div align="center"><?php echo $ulang_studio['tanggal_booking']; ?></div></td>
    <td><div align="center"><?php echo $ulang_studio['total_jam']; ?></div></td>
    <td><div align="center"><?php echo $ulang_studio['jam_mulai']; ?></div></td>
    <td><div align="center"><?php echo $ulang_studio['jam_selesai']; ?></div></td>
    <td><div align="right"><?php echo "Rp.$total,-"; ?>&nbsp;</div></td>
    <td><div align="center">
		<?php 
		if($_SESSION['id_transaksi']==$ulang_studio['id_transaksi']){
			echo "<b>$_SESSION[status]</b>";
		}else{
			$tgl=date("d-m-Y"); 
			if($tgl!=$ulang_studio['tanggal_booking']){ 
				$aa='OFF';
				echo "<b>OFF</b>"; 
			}else{ 
				$ja=date('h:i'); $jam="$ja:00";
				if($jam>=$ulang_studio['jam_mulai'] and $jam<=$ulang_studio['jam_selesai']){ $aa='ON'; echo "<b>ON</b>"; }else{ $aa='OFF'; echo "<b>OFF</b>"; }
			}?><?php if($aa=='ON'){ ?> | <a href="update_off.php?id_studio=<?php echo $ulang_studio['id_studio']; ?>&id_transaksi=<?php echo $ulang_studio['id_transaksi']; ?>&nama_studio=<?php echo $ulang_studio['nama_studio']; ?>">OFF</a><?php } }?>
        
        </div>
    </td>
    </tr>
    <?php } ?>
</table>
<?php } ?>
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
