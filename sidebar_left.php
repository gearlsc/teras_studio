<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="edit_akun.php"><img src="images/icon.png" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php echo $_SESSION['nama_admin']; ?></h5>
              	  	
                  <li class="mt">
                      <a class="active" href="home_admin.php">
                          <i class="fa fa-desktop"></i>
                          <span>HOME</span>
                      </a>
                  </li>
 					<li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>MENU HARGA STUDIO</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="tampil_data_harga_studio.php">Tampil Data</a></li>
                          <li><a  href="input_data_harga_studio.php">Input Data</a></li>
                          <li><a  href="cetak_data_harga_studio.php" target="_blank">Cetak Data</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>MENU HARGA RECORD</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="tampil_data_harga_record.php">Tampil Data</a></li>
                          <li><a  href="input_data_harga_record.php">Input Data</a></li>
                          <li><a  href="cetak_data_harga_record.php" target="_blank">Cetak Data</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>INFORMASI PROMO</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="tampil_data_promo.php">Tampil Data</a></li>
                          <li><a  href="input_data_promo.php">Input Data</a></li>
                      </ul>
                  </li>
                   <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>DATA PELANGGAN</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="tampil_data_pelanggan.php">Tampil Data</a></li>
                          <li><a  href="input_data_pelanggan.php">Input Data</a></li>
                          <li><a  href="cetak_data_pelanggan.php" target="_blank">Cetak Data</a></li>
                      </ul>
                  </li>
                  
                   <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>RENT. STUDIO</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="trans_rental_studio.php">Form Booking</a></li>
                          <li><a  href="data_booking.php">Data Booking</a></li>
                      </ul>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>RENT. RECORD</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="trans_rental_record.php">Form Booking</a></li>
                          <li><a  href="data_booking_record.php">Data Booking</a></li>
                      </ul>
                  </li>
                  
                   <li class="sub-menu">
                      <a href="javascript:;" >
                         <i class=" fa fa-bar-chart-o"></i>
                          <span>LAPORAN TRANSAKSI</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="laporan_bulanan.php">Laporan Bulanan</a></li>
                          <li><a  href="pencarian_laporan.php">Pencarian Laporan</a></li>
                      </ul>
                  </li>
                   <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>PENGATURAN ADMIN</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="edit_akun.php">Edit Akun</a></li>
                      </ul>
                  </li>
                 

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>