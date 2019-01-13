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
                  	  <h4 class="mb"><i class="fa fa-tasks"></i> FORM TRANSAKSI RECORDING</h4>
                      
                            <a href="trans_rental_record.php"><span class="badge bg-primary">Kembali</span></a><br><br>
<?php 
	include("koneksi.php");
	extract($_GET);
	$data=mysql_query("select * from pelanggan where id_pelanggan='$id_pelanggan'");
	$ulang_data=mysql_fetch_assoc($data);
?>  
                <form class="form-horizontal style-form" action="kalkulasi_pembayaran_record.php" method="post">
                	<div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Nama Pelanggan</label>
                        <div class="col-sm-8">
                        <input name="nama_pelanggan" type="text" class="form-control" value="<?php echo $ulang_data['nama_pelanggan']; ?>" disabled="disabled"> 
                        </div>
                        <input type="hidden" name="id_pelanggan" value="<?php echo $id_pelanggan; ?>">
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Tanggal Record</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" maxlength="10" value="<?php $date=date("d-m-Y"); echo $date; ?>" disabled>
                        <input type="hidden" name="tanggal_booking" value="<?php echo $date; ?>">
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Pilih Ruang </label>
                        <div class="col-sm-8">
                         <select name="id_studio" class="form-control">
                         	<?php 
								$data=mysql_query("select * from studio where rental='record'");
								while($ulang_data=mysql_fetch_assoc($data)){
								$harga = number_format($ulang_data[tarif_studio], 0, ',', '.');
							?>
                            <option value="<?php echo $ulang_data['id_studio']; ?>"><?php echo $ulang_data['nama_studio']; ?>&nbsp;&nbsp;( Rp. <?php echo $harga; ?>,-/5 Jam )</option>
                            <?php } ?>
                         </select>
                        </div> 
                       
                    </div>
                    
                   <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label" style="float:left">Check In</label>
                        <div class="col-sm-2">
                        <select name="jam" class="form-control">
                        	<option value="">Jam</option>
                            <option value="06">06 Pagi</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12 Siang</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18 Malam</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                        </select>
                        <select name="menit" class="form-control">
                        	<option value="">Menit</option>
                        	<option value="00">00</option>
                        	<option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                            <option value="45">45</option>
                            <option value="46">46</option>
                            <option value="47">47</option>
                            <option value="48">48</option>
                            <option value="49">49</option>
                            <option value="50">50</option>
                            <option value="51">51</option>
                            <option value="52">52</option>
                            <option value="53">53</option>
                            <option value="54">54</option>
                            <option value="55">55</option>
                            <option value="56">56</option>
                            <option value="57">57</option>
                            <option value="58">58</option>
                            <option value="59">59</option>
                        </select>
                        </div>
                        <div class="col-sm-10">
                        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="label label-default">&nbsp;* Buka 06:00 Pagi s/d Tutup 00:00 Malam</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Lama Record</label>
                        <div class="col-sm-8">
                        <select name="total_jam" class="form-control">
                        	<option value="5">5 Jam</option>
                           
                        </select>
                        </div>
                    </div>
                    
                    
                    <button type="submit" class="btn btn-danger">Kalkulasi Pembayaran</button>
                     <button type="reset" class="btn btn-danger">Batal</button>
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
