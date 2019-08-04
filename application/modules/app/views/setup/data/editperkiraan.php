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
                    <h2>Ubah Perkiraan</h2>
                    <div class="clearfix"></div>
					
                  </div>
                  <div class="x_content">
				  <?php foreach ($dataeditrekening as $row) {?>
				  <form id="form-jenisrek" data-parsley-validate class="form-horizontal form-label-left" method="post">
				  
					   <input type="hidden" id="CRTUSR" name="CRTUSR" class="form-control col-md-7 col-xs-12" value="<?=$this->session->userdata('userid');?>">
					
					 <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kd_akun">Kode Rekening 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="kd_akun" name="kd_akun" required="" maxlength="100" 
						  class="form-control col-md-7 col-xs-12" value="<?=$row->kd_akun;?>">
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="desc_akun">Nama Rekening
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" id="desc_akun" name="desc_akun" required="" 
						maxlength="100" class="form-control col-md-7 col-xs-12" value="<?=$row->desc_akun;?>">
                        </div>
                      </div>
					 
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kd_jenisakun">Jenis Rekening
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<select class="form-control"  name="kd_jenisakun">
						<option value="">--Pilih Jenis Rekening--</option>
						<?php foreach ($datajenisrekeningddl as $rowmaster) {
							if ($row->kd_jenisakun == $rowmaster->kd_jenisakun){?>	
							<option value="<?=$rowmaster->kd_jenisakun.":".$rowmaster->normal_balance;?>" selected><?=$rowmaster->desc_jenisakun;?></option>
						<?php }else{?>
							<option value="<?=$rowmaster->kd_jenisakun.":".$rowmaster->normal_balance;?>"><?=$rowmaster->desc_jenisakun;?></option>
						<?php }}?>
						</select>
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="posisi">Posisi
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<select class="form-control"  name="posisi">
							<option value="">--Pilih Posisi Sebagai--</option>
							<?php foreach ($dataposisiddl as $rowmasterposisi) {
							if ($row->kd_posisi == $rowmasterposisi->kd_posisi){?>	
							<option value="<?=$rowmasterposisi->kd_posisi;?>" selected><?=$rowmasterposisi->desc_posisi;?></option>
						<?php }else{?>
							<option value="<?=$rowmasterposisi->kd_posisi;?>"><?=$rowmasterposisi->desc_posisi;?></option>
						<?php }}?>

						</select>
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="saldo_awal_debet">Debit Awal
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" id="saldo_awal_debet" name="saldo_awal_debet" required=""
						 maxlength="100" class="form-control col-md-7 col-xs-12" value="<?=$row->saldo_awal_debet;?>">
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="saldo_awal_kredit">Kredit Awal
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" id="saldo_awal_kredit" name="saldo_awal_kredit" required="" 
						maxlength="100" class="form-control col-md-7 col-xs-12" value="<?=$row->saldo_awal_kredit;?>">
                        </div>
                      </div>
					  <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-primary" id="savebtn">Simpan</button>
						  
                        </div>
                      </div>
					  
					  </form>
					  <?php
						}
						?>
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
			$('#form-jenisrek').on('submit',function(e) {
			var form = $('#form-jenisrek')[0];
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
					url:'<?=base_url('app/perkiraan/proseseditrek');?>',
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
							window.location='<?=base_url('app/perkiraan/rekening');?>';
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
