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
		  <!--form add-->
			<div class="row">
              <div class="col-md-12 col-sm-4 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Input Jurnal Umum</h2>
                    <div class="clearfix"></div>
					
                  </div>
                  <div class="x_content">
				  <form id="form-jurnalumum" data-parsley-validate class="form-horizontal form-label-left" method="post">
					   <input type="hidden" id="CRTUSR" name="CRTUSR" class="form-control col-md-7 col-xs-12" value="<?=$this->session->userdata('userid');?>">
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_transaksi">No. Transaksi 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="no_transaksi" name="no_transaksi" required="" 
						  maxlength="100" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

					 <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_transaksi">Tanggal Transaksi 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" id="tgl_transaksi" name="tgl_transaksi" required="" maxlength="100" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					 
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kd_akun">Nama Rekening
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<select class="form-control"  name="kd_akun">
						<option value="">--Pilih Nama Rekening--</option>
						<?php foreach ($datarekeningddl as $row) {?>	
							<option value="<?=$row->kd_akun;?>"><?=$row->desc_akun;?></option>
						<?php }?>
						</select>
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="keterangan">Keterangan Transaksi 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="keterangan" name="keterangan" required="" 
						  maxlength="100" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="debet">Saldo Debit
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" id="debet" name="debet" required="" 
						maxlength="100" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kredit">Saldo Kredit
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" id="kredit" name="kredit" required="" 
						maxlength="100" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status_post">Apakah Ingin Di POST ?
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<select class="form-control"  name="status_post">
						<option value="">--Pilih Jawaban--</option>
						<option value="POST">YA</option>
						<option value="NOT POST">TIDAK</option>
						</select>
                        </div>
                      </div>
					  <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-primary" id="savebtn">Simpan</button>
						  
                        </div>
                      </div>
					  
					  </form>
                  </div>
                </div>
              </div>
			  
			  			  
            </div>
			<!--end form add-->
        </div>
        <!-- /page content -->
		<?php
			$this->load->view('ui/footermeta.php');
		?>
		<script type="text/javascript">
			//proses add
			$('#form-jurnalumum').on('submit',function(e) {
			var form = $('#form-jurnalumum')[0];
			var data = new FormData(form);
			swal({
			  title: "Simpan Data",
			  text: "Apakah anda ingin menyimpan data ini ?",
			  confirmButtonText:"Yakin",
			  confirmButtonColor: "#002855",
			  cancelButtonText:"Tidak",
			  showCancelButton: true,
			  closeOnConfirm: false,
			  type: "warning",
			  showLoaderOnConfirm: true
			}, function () {
				$.ajax({
					type: "POST",
					enctype: 'multipart/form-data',
					url:'<?=base_url('app/jurnal/savejurnalumum');?>',
					data: data,
					processData: false,
					contentType: false,
					cache: false,
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
						  text: e+"2",
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
