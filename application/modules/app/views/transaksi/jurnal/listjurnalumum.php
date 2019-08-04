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
                    <h2>List Jurnal Umum</h2>
                    <div class="clearfix"></div>
					
                  </div>
                  <div class="x_content">
				  <input type="hidden" id="usergroup" value="<?=$this->session->userdata('usergroupid');?>">
				  <a href="<?=base_url('app/jurnal/add_jurnalumum');?>" class="btn btn-success" title="Tambah user group" data-target=".bs-example-modal-smadd" style="float:right;display:block;" 
				  id="tomboltambah"><i class="fa fa-plus"></i> Input Jurnal Umum</a></br>
				  </br>
				  <table id="mydata" class="table table-striped table-bordered dt-responsive wrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
							<th>No. Transaksi</th>
							<th>Tanggal</th>
							<th>Deskripsi Rekening</th>
							<th>Keterangan</th>
							<th>Debet</th>
							<th>Kredit</th>
							<th>Status</th>
							<th>Action</th>
                        </tr>
                      </thead>
                      <tbody id="show_data">
					  <?php 
							foreach ($datajurnalumum as $row) {?>	 
							<tr>
							<td> <?=$row->no_transaksi;?></td>							
									<td> <?=$row->tgl_transaksi;?></td>
									<td> <?=$row->desc_akun;?></td>
									<td> <?=$row->keterangan;?></td>							
									<td> <?=$row->debet;?></td>
									<td> <?=$row->kredit;?></td>
									<td> <?=$row->status_post;?></td>
									<td><a class="btn btn-danger item_deletejurnal" data-id="<?=$row->no_transaksi;?>"><i class="glyphicon glyphicon-trash icon-white"></i></a></td>
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
		$(document).ready(function(){
		$('#mydata').dataTable();
		});
			//prosesdelete
			$(document).on('click','.item_deletejurnal',function(e) {
			var notransaksi = $(this).data('id');
			
			swal({
			  title: "Delete Data",
			  text: "Apakah anda yakin ingin menghapus data ini ?",
			  confirmButtonText:"Yakin",
			  confirmButtonColor: "#002855",
			  cancelButtonText:"Tidak",
			  showCancelButton: true,
			  closeOnConfirm: false,
			  type:"warning",
			  animation: "slide-from-top",
			  header: "Test Header",
			  showLoaderOnConfirm: true
			}, function () {
				$.ajax({
					url:'<?=base_url('app/jurnal/hapusjurnalumum');?>',
					dataType:'text',
					data : {notransaksi:notransaksi},
					success:function(e){
						if (e !== "error") {
						swal({
						  title: "Success",
						  confirmButtonColor: "#002855",
						  text: "Data berhasil disimpan !.",
						  type: "success"
						},function(){
							window.location='<?=base_url('app/jurnal/umum');?>';
						  });
						}
						else{
						swal({
						  title: "Failed",
						  confirmButtonColor: "#002855",
						  text: e+"1",
						  type: "error"
						});
						}
					},
					error:function(xhr, ajaxOptions, thrownError){
						swal({
						  title: "Failed",
						  confirmButtonColor: "#002855",
						  text: e+"1",
						  type: "error"
						});
					}
					
				});
				return false;
			});
			e.preventDefault(); 
		  });
		</script>
  </body>
</html>
