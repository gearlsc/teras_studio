<header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>TERAS STUDIO JAMBI</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <?php
						include("koneksi.php");
						$pemberitahuan=mysql_query("select * from studio");
						$hitung_pemberitahuan=mysql_num_rows($pemberitahuan);
					?>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme"><?php echo $hitung_pemberitahuan; ?></span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">TERAS STUDIO (LIST & TARIF)</p>
                            </li>
                            <?php 
								while($arr_pemberitahuan=mysql_fetch_assoc($pemberitahuan)){
								$harga = number_format($arr_pemberitahuan[tarif_studio], 0, ',', '.');
								$fasilitas=nl2br($arr_pemberitahuan['fasilitas_studio']);
							 ?>
                            <li>
                                <a>
                                    <div class="task-info">
                                        <div class="desc"><?php echo $arr_pemberitahuan['nama_studio']; ?></div>
                                        <div class="percent">Rp. <?php echo $harga; ?>,-</div>
                                    </div>
                                   
                                        <img src="foto_studio/<?php echo $arr_pemberitahuan['foto_studio']; ?>" width="120" height="120" /><br />
                                        
                                   
                                </a>
                            </li>
                            <?php } ?>
                            
                        </ul>
                    </li>
                    <!-- settings end -->
                   
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php">Logout</a></li>
            	</ul>
            </div>
        </header>