<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?=base_url();?>assets/images/logowmsia.png" type="image/ico" />

  <title>WM-SIA</title>
	<!-- Bootstrap -->
    <link href="<?=base_url();?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!--JQUERY JS-->
	 <script src="<?=base_url();?>assets/js/jquery.js"></script>
	<!-- Custom Theme Style -->
    <link href="<?=base_url();?>assets/build/css/custom.min.css" rel="stylesheet"> 
</head>
  
  <body class="login">
    <div>
		<div class="login_wrapper">
		<!-- Small modal -->
		<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-sm">
		  <div class="modal-content">

			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
			  </button>
			  <h4 class="modal-title" id="myModalLabel2">Login Guide</h4>
			</div>
			<div class="modal-body">
			  <h4>How To Login ?</h4>
			  <p>Please enter <b>your Username and your Password</b> into text area that we have provide </p>
			  <p>If you can't login, please contact administrator</p>
			  <p>Thanks</p>
			</div>
			
		  </div>
		</div>
	  </div>
        <div class="animate form login_form">
          <section class="login_content">
		  <img src="<?=base_url();?>assets/images/logowmsia.png" style="height:30%;width:30%;">
            <form action="<?=base_url();?>app/Sync/Cek_logincn" method="POST">
			<h1>WM-SIA</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="user" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" required="" />
              </div>
			  <div>
                <button type="submit" class="btn btn-primary">LOG IN</button>
				
              </div>
			  
			  <div class="separator">
			  <div>
				<h5>How To Login ? &nbsp;<a style="cursor:pointer;text-decoration:none;color:blue;" data-toggle="modal" data-target=".bs-example-modal-sm">Login Guide</a></h5>
			  </div>
			  <div class="clearfix"></div>
               <div>
                  <p>©2018 All Rights Reserved.<a href="">Wong Mantap</a></p>
                </div>
              </div>
            
          </section>
        </div>
		
	  </form>
      </div>
    </div>
	<!-- jQuery -->
    <script src="<?=base_url();?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?=base_url();?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
	 <!-- Custom Theme Scripts -->
    <script src="<?=base_url();?>assets/build/js/custom.min.js"></script>
  </body>
</html>
