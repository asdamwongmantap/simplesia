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
		  <!--list userakses-->
			<div class="row">
              <div class="col-md-12 col-sm-4 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Dashboard</h2>
                    <div class="clearfix"></div>
					
                  </div>
                  <div class="x_content">
				  <div class="dashboard-widget-content">
						Welcome <?=$this->session->userdata('fullname');?> To Simple Accounting System</br>
						
				</div>
                  </div>
                </div>
              </div>
			  		  
            </div>
			<!--end list userakses-->
        </div>
        <!-- /page content -->
		<?php
			// $this->load->view('user/kontenuserakses.php');
			$this->load->view('ui/footermeta.php');
		?>
		
		<script type="text/javascript">
			$(document).ready(function(){
			show_userall(); //call function show all product
            
			$('#mydata').dataTable();
			  
			//function show all product
			function show_userall(){
				var userappid = "<i>NULL</i>";
				$.ajax({
					type  : 'GET',
					url   : '<?=base_url('app/user/listuserallbyuserappjson');?>',
					async : false,
					"processing": true, //Feature control the processing indicator.
					"serverSide": true, //Feature control DataTables' server-side processing mode.
					"order": [], //Initial no order.
					dataType : 'JSON',
					data : {userappid:userappid},
					success : function(data){
						var html = '';
						$.each(data,function(data, value) {
							if (value.IS_ACTIVE == "1"){
								html += '<tr style="background-color:#F7F7F7;color:#000000;">'+
									'<td><a href="<?=base_url('app/user/detailuserakses/');?>'+value.USER_ID+'" style="text-decoration:underline;color:#000000;">'+value.USERNAME+'</a></td>'+
									'<td>'+value.FULLNAME+'</td>'+
									'<td>'+value.USER_GROUP_NAME+'</td>'+
									'<td>'+value.EMAIL+'</td>'+
									'<td><a href="" class="btn btn-danger item_resetpassword" data-id="'+value.USER_ID+'" data-reset="'+value.need_reset_password+'" data-usr="<?=$this->session->userdata('userid');?>" data-password="ff9f2372bc75db7be8094438ff342054" title="Reset Password" data-target=".bs-example-modal-smresetpass"><i class="fa fa-refresh"></i> Reset Password</a></td>'+
									'</tr>';
							}else{
								html += '<tr style="background-color:#ff8080;color:#000000;">'+
									'<td><a href="<?=base_url('app/user/detailuserakses/');?>'+value.USER_ID+'" style="text-decoration:underline;color:#000000;">'+value.USERNAME+'</a></td>'+
									'<td>'+value.FULLNAME+'</td>'+
									'<td>'+value.USER_GROUP_NAME+'</td>'+
									'<td>'+value.EMAIL+'</td>'+
									'<td><a href="" class="btn btn-danger item_resetpassword" data-id="'+value.USER_ID+'" data-reset="'+value.need_reset_password+'" data-usr="<?=$this->session->userdata('userid');?>" data-password="ff9f2372bc75db7be8094438ff342054" title="Reset Password" data-target=".bs-example-modal-smresetpass"><i class="fa fa-refresh"></i> Reset Password</a></td>'+
									'</tr>';
							}
							
									
						})
						$('#show_data').html(html);
						
					}
	 
				});
			}
			//prosesreset password
			$(document).on('click','.item_resetpassword',function(e) {
			var userid = $(this).data('id');
			var reset = $(this).data('reset');
			var password = $(this).data('password');
			var crtusr = $(this).data('usr');
			var appid = '<?=$this->session->userdata('appid');?>';
			//alert(crtusr);
			swal({
			  title: "Reset Password",
			  text: "Apakah anda yakin ingin melakukan reset password ?",
			  confirmButtonText:"Yakin",
			  confirmButtonColor: "#002855",
			  cancelButtonText:"Tidak",
			  showCancelButton: true,
			  closeOnConfirm: false,
			  imageUrl: '<?=base_url('assets/images/imagessure.png');?>',
			  animation: "slide-from-top",
			  header: "Test Header",
			  showLoaderOnConfirm: true
			}, function () {
				$.ajax({
					url:'<?=base_url('app/user/resetpassword');?>',
					dataType:'text',
					data : {userid:userid,reset:reset,password:password,crtusr:crtusr},
					success:function(e){
						swal({
						  title: "Reset",
						  confirmButtonColor: "#002855",
						  text: "Password berhasil direset !.",
						  imageUrl: '<?=base_url('assets/images/emotgood1.png');?>'
						},function(){
							window.location='<?=base_url('app/main/dashboard/');?>'+crtusr+'/'+appid;
						  });
					},
					error:function(xhr, ajaxOptions, thrownError){
						swal({
						  title: "Failed",
						  confirmButtonColor: "#002855",
						  text: "Password tidak berhasil direset !.",
						  imageUrl: '<?=base_url('assets/images/emotsad.png');?>'
						});
					}
					
				});
				return false;
			});
			e.preventDefault(); 
		  });
			
		});
		</script>
  </body>
</html>
