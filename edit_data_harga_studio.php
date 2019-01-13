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
                  	
                    
                    <div class="form-panel" style="position:relative; top:-80px;">
                  	  <h4 class="mb"><i class="fa fa-tasks"></i> FORM EDIT DATA STUDIO</h4>
                      <a href="tampil_data_harga_studio.php"><span class="badge bg-primary"><span class="fa fa-chevron-left text-transparent"></span>&nbsp;Kembali</span></a><br /><br />
                      <?php
                      	include("koneksi.php");
                        extract($_GET);
                        $data=mysql_query("select * from studio where id_studio='$id_studio'");
                        $ulang_data=mysql_fetch_assoc($data);
                      ?>
                      <form class="form-horizontal style-form" method="POST" enctype="multipart/form-data" action="edit_data_harga_studio2.php">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">NAMA STUDIO</label>
                              <div class="col-sm-10">
                                  <input name="nama_studio" type="text" class="form-control" value="<?php echo $ulang_data['nama_studio']; ?>">
                                  <input name="id_studio" type="hidden" value="<?php echo $ulang_data['id_studio']; ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">TARIF STUDIO</label>
                              <div class="col-sm-4">
                                  <input name="tarif_studio" type="text" class="form-control" value="<?php echo $ulang_data['tarif_studio']; ?>">
                                  <span class="help-block">Input tarif tanpa symbol, ex : 25000</span>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">FASILITAS</label>
                              <div class="col-sm-10">
                                  <textarea name="fasilitas_studio" class="form-control" rows="4"><?php echo $ulang_data['fasilitas_studio']; ?></textarea>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">KETERANGAN</label>
                              <div class="col-sm-10">
                                  <input name="keterangan" type="text" class="form-control" value="<?php echo $ulang_data['keterangan']; ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">FOTO STUDIO</label>
                              <div class="col-sm-10">
                                  <img src="foto_studio/<?php echo $ulang_data['foto_studio']; ?>" width="210" height="200" />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">UBAH FOTO </label>
                              <div class="col-sm-10">
                                  <input name="foto_studio" type="file" class="form-control">
                              </div>
                          </div>
                          <div align="right"><input type="submit" class="btn btn-theme" value="Edit Data"></div>
                      </form>
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
