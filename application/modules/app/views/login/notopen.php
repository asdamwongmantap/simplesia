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
          <img src="<?=base_url();?>assets/images/keydoorlock.jpg" style="height:100%;width:70%;">
		  <p style="color:#000000;">One login for more apps with <b>BAFLITE</b></p>
		  
        </div>
      </div>
      <div class="signupMsg visibility">
        <div class="textcontent">
          <p class="title">Have an account?</p>
          <p>Log in to use application.</p>
          <button id="switch2" style="cursor:pointer;">LOG IN</button>
        </div>
      </div>
    </div>
    <!-- backbox -->

    <div class="frontbox">
      <div class="login" style="background-color:#f2b333;">
        <div class="inputbox">
		<center><h2 style="color:#000000;">MAAF</h2></center>
          <br><b>BAFLITE</b> tidak support Google Chrome,Internet Explorer dan EDGE, 
			<p><center><h3><b>Silahkan gunakan Mozilla Firefox</b></h3></center>
			<p>Untuk bantuan informasi, silahkan hubungi IT Contact Center 5599, atau email : it_services@bussan.co.id
        </div>
        
      </div>

      <div class="signup hide">
        <center><h2>MAAF</h2></center>
        <div class="inputbox">
          
        </div>
        
      </div>

    </div>
    <!-- frontbox -->
  </div>

<script  src="<?=base_url();?>assetslogin/jslogin/index.js"></script>
</body>
</html>
