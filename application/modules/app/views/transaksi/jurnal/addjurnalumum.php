<!DOCTYPE html>
<html lang="en">
  <head>
		<?php
            $data['namakry'] = $this->session->userdata('fullname');
			$this->load->view('ui/headermeta.php',$data);
		?>
	
  </head>
  <script>
  function jumlah(){
	var awal = 1;
 //asli ++;
 //document.getElementById('jumlah').value = asli ++;
 //aslitextbox ++
  var cost1 = document.getElementsByName('jumlah[]');
  
 for (var i = 0; i < cost1.length; i++)
    {
		sum1 = parseFloat(cost1[i].value);
		cost1[i].value = awal++;
	}
 
}
function jumlahkrg(){

 var jmlhtxt = document.getElementById('jumlahtextbox').value;
 var jmlhtxtbox = jmlhtxt - 1;

 document.getElementById('jumlahtextbox').value = jmlhtxtbox;
}
	function GetDynamicTextBoxawal(value) {
	return '<td>&nbsp</td>'+
	'<td style="width:51%;border:0px solid black;">'+
	'<select class="form-control" style="border:1px solid grey;" id="kd_akun" name="kd_akun[]" onchange="freetextlain();">'+
	'<option value=->-</option><?php foreach ($datarekeningddl as $row) {?>	<option value="<?=$row->kd_akun;?>"><?=$row->desc_akun;?></option><?php }?></select>'+
	'<td style="width:15%;"><input type="text" style="border:1px solid grey;width:100%;height:35px;" id="keterangan" name="keterangan[]" onkeyup="tambahtarget();" onkeypress="return hanyaAngka(event)" value="">'+
	'<td style="width:15%;"><input type="text" style="border:1px solid grey;width:100%;height:35px;" id="debet" name="debet[]" onkeyup="tambahbobot();" onkeypress="return hanyaAngka(event)" onchange="bobotkosong();" value="1"></td>'+
	'<td style="width:15%;"><input type="text" style="border:1px solid grey;width:100%;height:35px;" id="kredit" name="kredit[]" onkeyup="tambahbobot();" onkeypress="return hanyaAngka(event)" onchange="bobotkosong();" value="1"></td><p></p>';
    //return '<td colspan="6">&nbsp;</td>';      
}
function GetDynamicTextBox(value) {
    return '<td><input type="button" value="-" class="remove btn btn-danger" style="margin-left:1px;"/></td>'+
	'<td >&nbsp</td><td style="width:51%;">'+
	'<select class="form-control" style="border:1px solid grey;" id="kd_akun" name="kd_akun[]" onchange="freetextlain();">'+
	'<option value=->-</option><?php foreach ($datarekeningddl as $row) {?>	<option value="<?=$row->kd_akun;?>"><?=$row->desc_akun;?></option><?php }?></select>'+
	'<td style="width:15%;"><input type="text" style="border:1px solid grey;width:100%;height:35px;" id="keterangan" name="keterangan[]" onkeyup="tambahtarget();" onkeypress="return hanyaAngka(event)" value="">'+
	'<td style="width:15%;"><input type="text" style="border:1px solid grey;width:100%;height:35px;" id="debet" name="debet[]" onkeyup="tambahbobot();" onkeypress="return hanyaAngka(event)" onchange="bobotkosong();" value="1";></td>'+
	'<td style="width:15%;"><input type="text" style="border:1px solid grey;width:100%;height:35px;" id="kredit" name="kredit[]" onkeyup="tambahbobot();" onkeypress="return hanyaAngka(event)" onchange="bobotkosong();" value="1";></td>';
}
	$(document).ready(function(){
	
		var div = $("<div />");
        div.html(GetDynamicTextBoxawal(""));
        $("#TextBoxContainer").append(div);
		
    $("#btnAdd").bind("click", function () {
		
        var div = $("<div />");
        div.html(GetDynamicTextBox(""));
        $("#TextBoxContainer").append(div);
		jumlah();
		
    });
    $("#btnGet").bind("click", function () {
        var values = "";
        $("input[id=kd_akun]").each(function () {
            values += $(this).val() + "\n";
        });
		
        alert(values);
    });
    $("body").on("click", ".remove", function () {
        $(this).closest("div").remove();
		jumlahkrg();
    });
	
	
});	
  </script>
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
					   <div class="form-group" >
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_transaksi" style="float:left;">No. Transaksi 
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
					 
                      <!-- <div class="form-group">
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
                      </div> -->
					  <!-- <div class="form-group">
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
                      </div> -->
					  <!-- <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status_post">Apakah Ingin Di POST ?
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<select class="form-control"  name="status_post">
						<option value="">--Pilih Jawaban--</option>
						<option value="POST">YA</option>
						<option value="NOT POST">TIDAK</option>
						</select>
                        </div>
                      </div> -->
					  <div>&nbsp;</div>
					  <table border="1px solid black;">
								<tr>
									<div style="border-bottom:0px solid black;border-top:0px solid black;border-left:0px solid black;border-right:1px solid black;width:4%;float:left;height:33px;"><input id="btnAdd" class="btn btn-info" type="button" value="+" style="margin-top:10px;"/></div>
									<!-- <div style="border-bottom:0px solid black;border-top:1px solid black;border-left:1px solid black;border-right:1px solid black;width:6%;float:left;height:33px;padding-top:15px;text-align:center;">&nbsp;&nbsp;No</div> -->
								    <div style="border-bottom:0px solid black;border-top:1px solid black;border-left:1px solid black;border-right:1px solid black;width:51%;float:left;height:33px;padding-top:15px;text-align:center;">&nbsp;&nbsp;Rekening</div>
									<div style="border-bottom:0px solid black;border-top:1px solid black;border-left:1px solid black;border-right:1px solid black;width:15%;float:left;height:33px;padding-top:15px;text-align:center;">Keterangan</div>
									<div style="border-bottom:0px solid black;border-top:1px solid black;border-left:1px solid black;border-right:1px solid black;width:15%;float:left;height:33px;padding-top:15px;text-align:center;">Debit</div>
									<div style="border-bottom:0px solid black;border-top:1px solid black;border-left:1px solid black;border-right:1px solid black;width:15%;float:left;height:33px;padding-top:15px;text-align:center;">Kredit</div>
								</tr>
								<tr>
									<div style="border-bottom:0px solid black;border-top:0px solid black;border-left:0px solid black;border-right:1px solid black;width:4%;float:left;">&nbsp;</div>
								    <!-- <div style="border-bottom:1px solid black;border-top:0px solid black;border-left:1px solid black;border-right:1px solid black;width:6%;float:left;">&nbsp;</div> -->
									<div style="border-bottom:1px solid black;border-top:0px solid black;border-left:1px solid black;border-right:1px solid black;width:51%;float:left;">&nbsp;</div>
									<div style="border-bottom:1px solid black;border-top:0px solid black;border-left:1px solid black;border-right:1px solid black;width:15%;float:left;">&nbsp;</div>
									<div style="border-bottom:1px solid black;border-top:0px solid black;border-left:1px solid black;border-right:1px solid black;width:15%;float:left;">&nbsp;</div>
									<div style="border-bottom:1px solid black;border-top:0px solid black;border-left:1px solid black;border-right:1px solid black;width:15%;float:left;">&nbsp;</div>
								</tr>
								<tr>
									<div id="TextBoxContainer"></div>
								</tr>
							</table>
							<div>&nbsp;</div>
							<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status_post">Apakah Ingin Di POST ?
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12" >
						<select class="form-control"  name="status_post">
						<option value="">--Pilih Jawaban--</option>
						<option value="POST">YA</option>
						<option value="NOT POST">TIDAK</option>
						</select>
                        </div>
                      </div>
					  <div>&nbsp;</div>
					  <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3" >
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
