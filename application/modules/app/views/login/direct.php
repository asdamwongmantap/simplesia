<!-- 
|--------------------------------------------------------------------------
| Pilihan Aplikasi Pada BAFLITE
|--------------------------------------------------------------------------
|
| File ini digunakan untuk:
| 1. memilih aplikasi yang ingin diakses
| 
| @params from $loginuser username          session username
|                         password          session password
| @output from $loginuser   USER_APP_ID
|
| @params             key1
| @output from key1  REF_APP_ID        array list application id
|                     IMG_APPS          array list image application
|                     URL_APPS          array list url application
|                     REF_ACCESS_DESC   array list access application
|                     REF_APP_NAME      array list application name
| 
-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>BAF Admin Panel</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<script src="<?=base_url();?>assets/js/jquery.js"></script>
   <link rel="icon" href="<?=base_url();?>assets/prod/images/baficon.png" type="image/ico" />
	<!--[if lt IE 9]>
	<script src="assets/dist/html5shiv.js"></script>
	<![endif]-->
	<!--[if lte IE 8]><script src="assets/js/selectivizr.js"></script><![endif]-->
	<!-- Bootstrap -->
    <link href="<?=base_url();?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
    <link href="<?=base_url();?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?=base_url();?>assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
	<!-- Custom Theme Style -->
    <link href="<?=base_url();?>assets/build/css/custom.min.css" rel="stylesheet">
	
</head>
<style type="text/css">
#overlay {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: #000;
filter:alpha(opacity=70);
-moz-opacity:0.7;
-khtml-opacity: 0.7;
opacity: 0.7;
z-index: 100;
display: none;
}
.cnt223 a{
text-decoration: none;
}
.popup{
width: 100%;
margin: 0 auto;
display: none;
position: fixed;
z-index: 101;
}
.cnt223{
min-width: 600px;
width: 600px;
min-height: 150px;
margin: 100px auto;
background: #f3f3f3;
position: relative;
z-index: 103;
padding: 15px 35px;
border-radius: 5px;
box-shadow: 0 2px 5px #000;
}
.cnt223 p{
clear: both;
    color: #555555;
    /* text-align: justify; */
    font-size: 20px;
    font-family: sans-serif;
}
.cnt223 p a{
color: #d91900;
font-weight: bold;
}
.cnt223 .x{
float: right;
height: 35px;
left: 22px;
position: relative;
top: -25px;
width: 34px;
}
.cnt223 .x:hover{
cursor: pointer;
}
</style>
<script type='text/javascript'>
$(function(){
var overlay = $('<div id="overlay"></div>');
overlay.show();
overlay.appendTo(document.body);
$('.popup').show();
$('#close').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return true;
});

$('.x').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});
});
</script>

<body>
<div class='popup'>
<div class='cnt223'>
<a href="<?=base_url();?>" id="close" style="float:right;"><i class="fa fa-close"></i></a>
<br/>
 <div class="x_title">
<h2>Please select application !!</h2>
<div class="clearfix"></div>
</div>

<p>
<?php 
$this->load->model('Mlogin');
$group = array();
$group1 = array();
$group2 = array();
$usergroupid = array();
$userid = array();
if ($loginuser[0]){
    foreach ($loginuser as $valueloginuser) {
        $usergroupid[] = $valueloginuser['USER_GROUP_ID'];
        $userid[] = $valueloginuser['USER_ID'];
        $group[] = $valueloginuser['USER_APP_ID'];
        // $userid[$valuelogin['USER_ID']][] = $valuelogin;
    }
}else{
        $usergroupid[] = $loginuser['USER_GROUP_ID'];
        $userid[] = $loginuser['USER_ID'];
        $group[] = $loginuser['USER_APP_ID'];
        
}
foreach ($group as $valuelogin1 => $key1) {
    $getroleapp = $this->Mlogin->get_aksesroleapp($key1);
    $group1[$getroleapp['REF_APP_ID']][] = $getroleapp;
    
}

foreach ($group1 as $value ) {
	$group2[$value['REF_APP_ID']][] = $value;
}

foreach ($group2 as $value1) {
    
    $mergearray =  $value1[0];
    $i = 0;
   
    foreach ($mergearray as $value2) {
        $usergroupid2 = $usergroupid;
        $userid2 = $userid;
        
?>
	<!-- <a href="<?=$value2['arrayData']['URL_APPS'];?>/main/dashboard/<?=$usergroupid2[$i];?>/<?=$value2['arrayData']['REF_APP_ID'];?>/<?=$userid2[$i];?>" class="btn btn-default"><img src="<?=base_url();?>assets/uploadfile/appimage/<?=$value2['arrayData']['IMG_APPS'];?>" style="width:100px;height:100px;"></a> -->
    <div style="width:100%;height:30%;">
    <a href="<?=$value2['arrayData']['URL_APPS'];?>/main/dashboard/<?=$usergroupid2[$i];?>/<?=$value2['arrayData']['REF_APP_ID'];?>/<?=$userid2[$i];?>" class="btn btn-default" style="color:blue;width:100%;">
     <div style="width:60px;height:100%;float:left;">
     <?php
        if (file_exists(base_url('assets/uploadfile/appimage/'.$value2['arrayData']['IMG_APPS'].''))){
            $urlgambar = base_url('assets/uploadfile/appimage/'.$value2['arrayData']['IMG_APPS'].'');
        }else{
            $urlgambar = base_url('assets/images/bafkosong.png');
        }
     ?>
        <img src="<?=$urlgambar;?>" style="width:100%;height:30%;float:left;">
     </div>
     <div style="width:70%;height:100%;float:left;text-align:left;padding-left:10px;padding-top:9px;padding-bottom:9px;text-transform:uppercase;">
        <?=$value2['arrayData']['REF_APP_NAME'];?><br>
        <font style="color:black">Sebagai </font> <?=$value2['arrayData']['REF_ACCESS_APP_DESC'];?>
     </div>
     
        
    </a>
    </div>
	<?php $i++;}}?>
</p>
</div>
</div>
    <!-- Datatables -->
    <script src="<?=base_url();?>assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url();?>assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
</body>

</html>