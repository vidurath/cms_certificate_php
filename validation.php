<?php require_once 'include/db.php' ?>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
	<style>
		@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
	</style>
	<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>

    <style>
        p {
            
        }
    </style>

</head>
<body>

<?php

// $uuid = $_GET['uuid'];
$uuid = '8e84c592-ac03-421e-8691-64487a73091d';
$sql="SELECT * FROM horsepower_detail WHERE uuid = '$uuid'";
$result=$conn->query($sql);
  if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

 ?>

	<header class="site-header" id="header">
        <?php
            if ($row['valid'] == '0')
            { 
        ?>
            <h1 class="site-header__title" data-lead-id="site-header-title">VALID!</h1>
        <?php
            }else
            {
        
        ?>
                <h1 class="site-header__title" data-lead-id="site-header-title">NOT VALID!</h1>
        <?php
            }
        ?>
	</header>

	<div class="main-content">
		
        <!-- <i class="fa fa-times main-content__checkmark" id="checkmark" style="color:red"></i> -->
        <?php
            if ($row['valid'] == '0')
            { 
        ?>
            <i class="fa fa-check main-content__checkmark" id="checkmark"></i>
        <?php
            }else
            {
        
        ?>
                <i class="fa fa-times main-content__checkmark" id="checkmark" style="color:red"></i>
        <?php
            }
        ?>
        <p class="main-content__body" data-lead-id="main-content-body">
        <div class="row">
                  <div class="col-6">
                      <p><b>Owner Name :</b> <?php echo $row['cname'] ?></p>
                      <p><b>Owner Address :</b> <?php echo $row['caddress'] ?></p>
                      <p><b>Owner Identificaiton Number :</b> <?php echo $row['cidentification'] ?></p>
                      <p><b>Vehicle Number :</b> <?php echo $row['vehiclenumber'] ?></p>
                      <p><b>Chassis Number :</b> <?php echo $row['chassisnumber'] ?></p>
                      <p><b>Make :</b> <?php echo $row['vmake'] ?></p>
                      <p><b>Model :</b> <?php echo $row['vmodel'] ?></p>

                  </div>

	</div>
        
    <?php
  }
}
 ?>

	<footer class="site-footer" id="footer">
		<p class="site-footer__fineprint" id="fineprint">Copyright Startouch ©2022 | All Rights Reserved</p>
	</footer>
</body>
</html>