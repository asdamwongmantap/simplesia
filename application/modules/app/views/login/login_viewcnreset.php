<!DOCTYPE html>
<html lang="en" >

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?=base_url();?>assets/prod/images/baficon.png" type="image/ico" />

  <title>BAF Admin Panel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="<?=base_url();?>assets/js/jquery.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?=base_url();?>assetslogin/csslogin/style.css">
  
</head>

<body>

  <div class="container">
    <div class="backbox">
      <div class="loginMsg">
        <div class="textcontent">
          <p class="title">Don't have an account?</p>
          <p>Sign up to save all your graph.</p>
          
        </div>
      </div>
      <div class="signupMsg">
        <div class="textcontent">
			<img src="<?=base_url();?>assets/images/keydoorlock.jpg" style="height:100%;width:70%;">
		    <p style="color:#000000;">One login for more apps with <b>BAFLITE</b></p>
        </div>
      </div>
    </div>
    <!-- backbox -->

    <div class="frontbox">
      <div class="login">
	    <img src="<?=base_url();?>assets/images/bafputih.png" style="height:100%;width:70%;">
		<form action="<?=base_url();?>app/user/ubahpassword" method="post">
        <div class="inputbox">
		  <input type="hidden" name="userid" value="<?=$userid;?>">
		  <input type="password" name="password" required="" placeholder="  New Password">
          <input type="password" name="konfirmpassword" required="" placeholder="  Confirm New Password"><p>
        </div>
		
        <button type="submit">Reset</button>
		</form>
      </div>
	<div class="signup hide">
        
     </div>
    </div>
    <!-- frontbox -->
  </div>

<script  src="<?=base_url();?>assetslogin/jslogin/index2.js"></script>
</body>
</html>
