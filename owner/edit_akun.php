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
                  	  <h4 class="mb"><i class="fa fa-tasks"></i> EDIT AKUN OWNER</h4>
            <?php
				include("koneksi.php");
				$user=mysql_query("select * from owner");
				$arr_user=mysql_fetch_assoc($user);
			?>
                <form role="form" action="simpan_profil_akun.php" method="post">
                <label for="exampleInputEmail1">NAMA OWNER</label>
                	<div class="input-group col-md-12">
                    	<span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input name="nama_owner" type="text" class="form-control" placeholder="<?php echo $arr_user['nama_owner']; ?>" value="<?php echo $arr_user['nama_owner']; ?>">
                     </div><br>
                  
                    <div class="form-group">
                        <label>USERNAME</label>
                        <input type="text" class="form-control" name="username_owner" value="<?php echo $arr_user['username_owner']; ?>"> 
                    </div>
                    <div class="form-group">
                        <label>PASSWORD</label>
                        <input type="password" class="form-control" name="password_owner" value="<?php echo $arr_user['password_owner']; ?>"> 
                    </div>
                    <div class="form-group">
                        <label>PERTANYAAN KEAMANAN</label>
                        <input type="text" class="form-control" name="pertanyaan_keamanan_owner" value="<?php echo $arr_user['pertanyaan_keamanan_owner']; ?>"> 
                    </div>
                    <div class="form-group">
                        <label>JAWABAN KEAMANAN</label>
                        <input type="text" class="form-control" name="jawaban_keamanan_owner" value="<?php echo $arr_user['jawaban_keamanan_owner']; ?>"> 
                    </div>
                    <input type="checkbox" name="yakin" value="y" /> UBAH DATA ?<br /><br />
                    <button type="submit" class="btn btn-theme">Submit</button>
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
