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
                  	
                    
                    <div class="col-md-12" style="position:relative; top:-80px;">
                      <div class="content-panel">
                      <h4><i class="fa fa-tasks"></i> DATA STUDIO</h4>
           					<?php
                              		include("koneksi.php");
                                    $data=mysql_query("select * from studio where rental='studio'");
                                    while($ulang_data=mysql_fetch_assoc($data)){
                                    $harga = number_format($ulang_data[tarif_studio], 0, ',', '.');
                                    $fasilitas=nl2br($ulang_data['fasilitas_studio']);
                              ?>
                              
                         
	                  	  	  
	                  	  	  <hr>
                              <div align="right" style="margin-right:10px">
                              	<a href="edit_data_harga_studio.php?id_studio=<?php echo $ulang_data['id_studio']; ?>" title="EDIT"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                <a href="hapus_data_harga_studio.php?id_studio=<?php echo $ulang_data['id_studio']; ?>" title="HAPUS"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                              </div>
                              <table width="832" border="0">
  <tr>
    <td width="11">&nbsp;</td>
    <td width="308" rowspan="4" align="center"><p>
    <h4><?php echo $ulang_data['nama_studio']; ?>
    
    <?php /*
		$tgl=date("d-m-Y"); 
		$c=mysql_query("select * from studio a,transaksi b where a.id_studio=b.id_studio and a.id_studio=$ulang_data[id_studio]");
		while($d=mysql_fetch_assoc($c)){
			if($_SESSION['id_studio']==$d['id_studio']){
				$f=$_SESSION['status'];
			}else{
				if($tgl!=$d['tanggal_booking']){ 
					$f="OFF";
				}else{ 
					$ja=date('h:i'); $jam="$ja:00";
					if($jam>=$d['jam_mulai'] and $jam<=$d['jam_selesai']){ $nilai=1;  }else{ $nilai=0; }
					$total_nilai=$nilai+$total_nilai;
					if($total_nilai=0){
						$f="OFF";
					}else{
						$f="ON";
					}	
				}
			}
		}echo "<font color=red>$f</font>";
		
		*/
	?>
    
    
    </h4></p>
      <p><img src="foto_studio/<?php echo $ulang_data['foto_studio']; ?>" width="300" height="300" style="margin-right:10PX;"></p></td>
    <td width="499" rowspan="4"><h4>FASILITAS</h4><BR><?php echo "$fasilitas"; ?><br><h4>KETERANGAN</h4><BR><?php echo $ulang_data['keterangan']; ?><br><br><h4>TARIF STUDIO</h4><font size="+2" color="#0000FF">&nbsp;&nbsp;<?php echo "Rp. $harga,-"; ?></font></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    </tr>
</table>

                             <?php } ?>
                      </div><!-- /content-panel -->
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
