<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border:0px solid black;">
              <center><a href="#" class="site_title"><img src="<?=base_url();?>assets/images/logowmsia.png" style="height:100%;width:30%;margin-bottom:7px;margin-top:1px"></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?=base_url();?>assets/prod/images/img.jpg" alt="user" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?=$namakry;?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->
			
            <br />
			<?php
				$nikuri = $this->session->userdata('nik');
				// $periodeuri = $this->session->userdata('periode');
				$usergroup = $this->session->userdata('usergroup');	
				//print_r($usergroup);
			?>
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
				   <li><a href="<?=base_url();?>main/dashboard"><i class="fa fa-home"></i> Dashboard </a></li>
				   <h3>Setup</h3>
           <li>
           <a href="#"><i class="fa fa-gear"></i> Data </a>
				   
				   <ul class="nav child_menu">
						<li>
							<a href="/tes">Jenis Rekening</a>
						</li>
            <li>
							<a href="/tes">Perkiraan</a>
						</li>
						</ul>
            </li>
            <h3>Transaksi</h3>
           <li>
           <a href="#"><i class="fa fa-calculator"></i> Jurnal </a>
				   
				   <ul class="nav child_menu">
						<li>
							<a href="/tes">Jurnal Umum</a>
						</li>
            <li>
							<a href="/tes">Jurnal Kas Keluar</a>
						</li>
						</ul>
            </li>
            <li>
           <a href="#"><i class="fa fa-calculator"></i> Posting </a>
				   </li>
				   
            <h3>Laporan</h3>
           <li>
           <a href="#"><i class="fa fa-book"></i> Laporan </a>
				   
				   <ul class="nav child_menu">
						<li>
							<a href="/tes">Jurnal Umum</a>
						</li>
            <li>
							<a href="/tes">Buku Besar</a>
						</li>
						</ul>
            </li>
					<h3>Others</h3>
					<li><a href="<?=base_url();?>app/login_c/logout"><i class="fa fa-sign-out"></i> Logout </a></li>
                </ul>
				
              </div>
              
            </div>
            <!-- /sidebar menu -->

          </div>
        </div>