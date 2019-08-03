<!DOCTYPE html>
<html lang="en">
  <head>
		<?php
			$data['namakry'] = $this->session->userdata('fullname');
			$this->load->view('ui/headermeta.php',$data);
		?>
	
  </head>

  <body class="nav-md" progress_bar="true">
  
    <div class="container body">
      <div class="main_container">
        <?php
			$this->load->view('ui/menu.php');
			$this->load->view('ui/topmenu.php');
		?>
		<!-- page content -->
        <div class="right_col" role="main">
          <!--marquee-->
			<div class="row">
            <div class="col-md-12 col-sm-4 col-xs-12">
              <div class="x_panel">
				<marquee behavior="scroll" direction="left" scrollamount="3"><?php foreach($setting as $marquee){echo $marquee->value;};?></marquee>
              </div>
            </div>
          </div>
		  <!-- end marquee-->
		  <!--list usergroup-->
			<div class="row">
              <div class="col-md-12 col-sm-4 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List Jenis Rekening</h2>
                    <div class="clearfix"></div>
					
                  </div>
                  <div class="x_content">
				  <input type="hidden" id="usergroup" value="<?=$this->session->userdata('usergroupid');?>">
				  <a href="<?=base_url('app/jenis_rek/add_jnsrek');?>" class="btn btn-success" title="Tambah user group" data-target=".bs-example-modal-smadd" style="float:right;display:block;" 
				  id="tomboltambah"><i class="fa fa-plus"></i> Tambah Data Jenis Rekening</a></br>
				  </br>
				  <table id="mydata" class="table table-striped table-bordered dt-responsive wrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
							<th>Kode Jenis Rekening</th>
							<th>Deskripsi Jenis Rekening</th>
							<th>Action</th>
                        </tr>
                      </thead>
                      <tbody id="show_data">
					  
							<?php 
							foreach ($datajenisrekening as $row) {?>	 
							<tr>
									<td> <?=$row->kd_jenisakun;?></td>							
									<td> <?=$row->desc_jenisakun;?></td>
									<td><a class="btn btn-success" href='detailjenis/<?=$row->kd_jenisakun;?>'><i class="glyphicon glyphicon-zoom-in icon-white"></i></a>
									<a class="btn btn-primary" href='editjenis/<?=$row->kd_jenisakun;?>'><i class="glyphicon glyphicon-edit icon-white"></i></a>
									<a class="btn btn-danger" href='hapusjenis/<?=$row->kd_jenisakun;?>'><i class="glyphicon glyphicon-trash icon-white"></i></a></td>
								</tr>
							<?php
								}
							?>
                      </tbody>
                    </table>
					
                  </div>
                </div>
              </div>
			  
			  			  
            </div>
			<!--end list usergroup-->
        </div>
        <!-- /page content -->
		<?php
			$this->load->view('ui/footermeta.php');
		?>
		<!-- Parsley -->
		<script src="<?=base_url();?>assets/vendors/parsleyjs/dist/parsley.min.js"></script>
		<script type="text/javascript">
		
		</script>
  </body>
</html>
