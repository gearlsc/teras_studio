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
                  	
                    
                    <div class="col-md-12" style="position:relative; top:-80px;">
                      <div class="content-panel">
                      <h4><i class="fa fa-tasks"></i> DATA PELANGGAN</h4>
           					
                              
                         
	                  	  	  
	                  	  	  <hr>
                              <table class="table order-table">
                              &nbsp;&nbsp;<input type="search" class="light-table-filter" data-table="order-table" placeholder="Masukan Kata Kunci" />
  <BR /><BR />
		                          <thead>
		                          <tr>
		                              <th>#</th>
		                              <th>NAMA PELANGGAN</th>
		                              <th>ALAMAT</th>
		                              <th>NO. HP</th>
                                      <th>TANGGAL MENDAFTAR</th>
                                      <th>PERINTAH</th>
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
		                              <td><?php echo $ulang_data['no_hp_pelanggan']; ?></td>
                                      <td><?php echo $ulang_data['tanggal_daftar_pelanggan']; ?></td>
                                      <td>
                                      	<a href="edit_data_pelanggan.php?id_pelanggan=<?php echo $ulang_data['id_pelanggan']; ?>" title="EDIT"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a> | 
                                		<a href="hapus_data_pelanggan.php?id_pelanggan=<?php echo $ulang_data['id_pelanggan']; ?>" title="HAPUS"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                                      </td>
		                          </tr>
                                  <?php } ?>
		                          </tbody>
		                      </table>

                             
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
