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
    
    <script type="text/javascript">
function numbersonly(e, decimal) {
var key;
var keychar;

if (window.event) {
   key = window.event.keyCode;
}
else if (e) {
   key = e.which;
}
else {
   return true;
}
keychar = String.fromCharCode(key);

if ((key==null) || (key==0) || (key==8) ||  (key==9) || (key==13) || (key==27) ) {
   return true;
}
else if ((("0123456789").indexOf(keychar) > -1)) {
   return true;
}
else if (decimal && (keychar == ".")) { 
  return true;
}
else
   return false;
}
</script>
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
                  	  <h4 class="mb"><i class="fa fa-tasks"></i> FORM EDIT DATA PELANGGAN</h4>
                      <a href="tampil_data_pelanggan.php"><span class="badge bg-primary"><span class="fa fa-chevron-left text-transparent"></span>&nbsp;Kembali</span></a><br /><br />
                      <?php
                      	include("koneksi.php");
                        extract($_GET);
                        extract($_POST);
                        $data=mysql_query("select * from pelanggan where id_pelanggan='$id_pelanggan'");
                        $ulang_data=mysql_fetch_assoc($data);
                      ?>
                      <form class="form-horizontal style-form" method="POST" action="edit_data_pelanggan2.php">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">NAMA PELANGGAN</label>
                              <div class="col-sm-10">
                                  <input name="nama_pelanggan" type="text" class="form-control" value="<?php echo $ulang_data['nama_pelanggan']; ?>">
                                  <input name="id_pelanggan" type="hidden" value="<?php echo $ulang_data['id_pelanggan']; ?>" >
                              </div>
                          </div>
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">ALAMAT PELANGGAN</label>
                              <div class="col-sm-10">
                                  <textarea name="alamat_pelanggan" class="form-control" rows="3"><?php echo $ulang_data['alamat_pelanggan']; ?></textarea>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">NO. HANDPHONE</label>
                              <div class="col-sm-4">
                                  <input name="no_hp_pelanggan" type="text" class="form-control" maxlength="18" value="<?php echo $ulang_data['no_hp_pelanggan']; ?>" onKeyPress="return numbersonly(event, false)">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">TANGGAL MENDAFTAR</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" disabled="disabled" value="<?php echo $ulang_data['tanggal_daftar_pelanggan']; ?>">
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
