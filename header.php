<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Bus Online Ticket System</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">			
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
			
			<link rel = "stylesheet" type = "text/css" href = "css/bbooking.css">
		
		</head>
		<body>
			<!-- Start of Header -->
			<?php
				  echo "<header id='header' id='home'>";
					echo "<div class='container'>";
						echo "<div class='row align-items-center justify-content-between d-flex'>";
						  echo "<div id='logo'>";
							echo "<a href='index.php'><img src='img/logo2.png' width='70' alt='Logo' /></a>";
						  echo "</div>";
						  echo "<nav id='nav-menu-container'>";
							echo "<ul class='nav-menu'>";
						      //List down all the links
							  echo "<li class='menu-active'><a href='index.php'>Home</a></li>";
							  echo "<li><a href='dates.php'>Destinations</a></li>";
							  echo "<li><a href='buses.php'>Buses</a></li>";
							  echo "<li><a href='busbooking.php'>Booking</a></li>";
							  echo "<li><a href='purchasehistory.php'>Purchase History</a></li>";
							  echo "<li><a href='login.php'>Login</a></li>";
							  echo "<li><a href='register.php'>Register</a></li>";
							  echo "</li>";			          
							echo "</ul>";
						  echo "</nav>";	    		
						echo "</div>";
					echo "</div>";
				  echo "</header>";
			  ?>
			  <!-- End of Header -->