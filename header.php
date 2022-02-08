<!DOCTYPE html>
<?php
	session_start();
 ?>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Online Fitnes</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />

</head>
<body>
<div id="wrapper" class="home-page">
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><i class="icon-info-blocks material-icons">location_on</i>Shape</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li ><a class="waves-effect waves-dark" href="index.php">Home</a></li>


            <li><a class="waves-effect waves-dark" href="index.php?page=about">About</a></li>
                        <li><a class="waves-effect waves-dark" href="index.php?page=gallery">Gallery</a></li>
                        <li><a class="waves-effect waves-dark" href="index.php?page=pricing">Pricing</a></li>
                        <li><a class="waves-effect waves-dark" href="index.php?page=contact#">Contact</a></li>

												<?php
												if (isset($_SESSION["korisnik"])) {?>
												<li><a class="waves-effect waves-dark" href="index.php?page=services">Services</a></li>
												<li><a class="waves-effect waves-dark" href="index.php?page=logout">Logout</a></li>

												<?php
												if ($_SESSION['korisnik']->is_admin==1) {?>
													<li><a class="waves-effect waves-dark" href="index.php?page=admin_panel">Admin Panel</a></li>
													<?php
												}

											}else {?>
												<li><a class="waves-effect waves-dark" href="index.php?page=register">Register</a></li>
												<li><a class="waves-effect waves-dark" href="index.php?page=login">Login</a></li>
												<?php
												}
			 									?>
                    </ul>
                </div>
            </div>
        </div>
	</header>
