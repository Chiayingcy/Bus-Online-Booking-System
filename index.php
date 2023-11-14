	<!-- Start Header Area -->
	<?php
		
		//Include header
		include('header.php');
		
	?>
	<!-- End Header Area -->


			<!-- Start Banner Area -->
			<?php
				echo "<section class='banner-area relative' id='home'>";
					echo "<div class='overlay overlay-bg'></div>";	
					echo "<div class='container'>";
						echo "<div class='row fullscreen d-flex align-items-center justify-content-center'>";
							echo "<div class='banner-content col-lg-7 col-md-6 '>";
								echo "<h6 class='text-white '>Bus Online Ticket System</h6>";
								echo "<h1 class='text-white text-uppercase'>
									ENJOY THE JOURNEY				
								</h1>";
								//Button to go to booking page
								echo "<br /><br /><a href='busbooking.php' class='primary-btn text-uppercase'>Book Bus Now</a>";
							echo "</div>";						
						echo "</div>";
					echo "</div>";					
				echo "</section>"; 
			?>
			<!-- End Banner Area -->	

			<!-- Start Model Area -->
			<?php
				echo "<section class='model-area section-gap' id='cars'>";
					echo "<div class='container'>";
						echo "<div class='row d-flex justify-content-center pb-40'>";
							echo "<div class='col-md-8 pb-40 header-text'>";
								echo "<h1 class='text-center pb-10'>Choose your Desired Bus Model</h1>";
							echo "</div>";
						echo "</div>";
						//Display list of buses in slide mode
						echo "<div class='active-model-carusel'>";
							echo "<div class='row align-items-center single-model item'>";
								echo "<div class='col-lg-6 model-left'>";
									echo "<div class='title justify-content-between d-flex'>";
										echo "<h4 class='mt-20'>Transnasional Bus</h4>";
										echo "<h2>RM25.50-RM47.50</h2>";
									echo "</div>";
									//Transnasional Bus description
									echo "<p>
										Transnasional is the leader in the bus express industry and also one of the most well-known 
										bus company brand in Malaysia. Safe, enjoyable and affordable rides are provided 
										by Transnasional. Insurance coverage for passengers and baggage are also provided by 
										Transnasional, whereby in cases of unfortunate events (baggage lost, accidents), 
										insurance are covered by Transnasional. Transnasional is certainly a good choice 
										for travelling with so much offer under one brand name!
									</p>";
									echo "<p>
										Capacity         : 30-seater <br>
										Doors            : 4 (1 driver side door, 2 emergency exit doors, 1 passenger door) <br>
										Transmission     : Automatic
									</p>";
									echo "<a class='text-uppercase primary-btn' href='busbooking.php'>Book This Bus Now</a>";
								echo "</div>";
								echo "<div class='col-lg-6 model-right'>";
									echo "<img class='img-fluid' src='img/transnasional.jpg' alt='Transnasional'>";
								echo "</div>";
							echo "</div>";
							echo "<div class='row align-items-center single-model item'>";
								echo "<div class='col-lg-6 model-left'>";
									echo "<div class='title justify-content-between d-flex'>";
										echo "<h4 class='mt-20'>Aeroline Express</h4>";
										echo "<h2>RM15.50-RM48.00</h2>";
									echo"</div>";
									//Aeroline Express bus description
									echo "<p>
										All Aeroline journeys are direct trips from one destination to another. 
										There are no stops anywhere until you reach your destination. 
										Aeroline’s operation is done by using its very own dedicated facilities 
										which are manned by experienced mechanics to deliver services in Aeroline’s own standards. 
										If you’re looking for a safe, enjoyable and time-saving ride, 
										Aeroline Express is the best choice for you!
									</p>";
									echo "<p>
										Capacity         : 60-seater <br>
										Doors            : 6 (1 driver side door, 4 emergency exit doors, 1 passenger door) <br>
										Transmission     : Automatic
									</p>";
									echo "<a class='text-uppercase primary-btn' href='busbooking.php'>Book This Bus Now</a>";
								echo "</div>";
								echo "<div class='col-lg-6 model-right'>";
									echo "<img src='img/aeroline_thumbnail.jpg' width='275' height='375' alt='aeroline'>";
								echo "</div>";
							echo "</div>";
							echo "<div class='row align-items-center single-model item'>";
								echo "<div class='col-lg-6 model-left'>";
									echo "<div class='title justify-content-between d-flex'>";
										echo "<h4 class='mt-20'>Arwana Express</h4>";
										echo "<h2>RM23.00-RM47.00</h2>";
									echo "</div>";
									//Arwana Express bus
									echo "<p>
										Arwana Express offers faster bus services compared to other services. 
										We assure you that your comfort is an important factor to us. 
										The surrounding of the bus is always well-maintained. 
										Therefore, if you’re looking for a quick and comfortable bus ride, 
										Arwana Express is the best choice for you!
									</p>";
									echo "<p>
										Capacity         : 40-seater <br>
										Doors            : 4 (1 driver side door, 2 emergency exit doors, 1 passenger door) <br>
										Transmission     : Automatic
									</p>";
									echo "<a class='text-uppercase primary-btn' href='busbooking.php'>Book This Bus Now</a>";
								echo "</div>";
								echo "<div class='col-lg-6 model-right'>";
									echo "<img class='img-fluid' src='img/arwana_thumbnail.jpeg' width='275' height='375' alt='Arwana'>";
								echo "</div>";
							echo "</div>";
							echo "<div class='row align-items-center single-model item'>";
								echo "<div class='col-lg-6 model-left'>";
									echo "<div class='title justify-content-between d-flex'>";
										echo "<h4 class='mt-20'>Sri Maju Express</h4>";
										echo "<h2>RM17.00-RM48.00</h2>";
									echo "</div>";
									//Sri Maju Express bus description
									echo "<p>
										Sri Maju is one of the biggest bus services in Malaysia. 
										An experience of an enhanced, comfortable, and safe bus ride 
										with a professional driver is ensured. We ensure that we will 
										fulfil you with a fulfilling journey based on your budget. 
										If you’re searching for a worth and comfortable ride, 
										Sri Maju Express will do the job for you!
									</p>";
									echo "<p>
										Capacity         : 25-seater <br>
										Doors            : 4 (1 driver side door, 2 emergency exit doors, 1 passenger door) <br>
										Transmission     : Automatic
									</p>";
									echo "<a class='text-uppercase primary-btn' href='busbooking.php'>Book This Bus Now</a>";
								echo "</div>";
								echo "<div class='col-lg-6 model-right'>";
									echo "<img class='img-fluid' src='img/maju.jpg' alt='Sri Maju'>";
								echo "</div>";
							echo "</div>";
							echo "<div class='row align-items-center single-model item'>";
								echo "<div class='col-lg-6 model-left'>";
									echo "<div class='title justify-content-between d-flex'>";
										echo "<h4 class='mt-20'>Billion Stars</h4>";
										echo "<h2>RM19.00-RM46.50</h2>";
									echo "</div>";
									//Billion Stars Express bus description
									echo "<p>
										All the buses of Billion Stars Express are well maintained and 
										comply with international safety standards. Billion Stars ensures
										the safety and reliability of passengers. There are even charging 
										ports in front of every seat and Wi-Fi service is available. 
										For a safe, reliable and enjoyable journey, book a Billion Stars Express bus ticket today!
									</p>";
									echo "<p>
										Capacity         : 45-seater <br>
										Doors            : 4 (1 driver side door, 2 emergency exit doors, 1 passenger door) <br>
										Transmission     : Automatic
									</p>";
									echo "<a class='text-uppercase primary-btn' href='busbooking.php'>Book This Bus Now</a>";
								echo "</div>";
								echo "<div class='col-lg-6 model-right'>";
									echo "<img class='img-fluid' src='img/star_thumbnail.jpg' alt='Billion Stars'>";
								echo "</div>";
							echo "</div>";
							echo "<div class='row align-items-center single-model item'>";
								echo "<div class='col-lg-6 model-left'>";
									echo "<div class='title justify-content-between d-flex'>";
										echo "<h4 class='mt-20'>Plusliner</h4>";
										echo "<h2>RM16.00-RM45.00</h2>";
									echo "</div>";
									//Plusliner bus description
									echo "<p>
										Plusliner has a fleet of modern and comfortable coaches. 
										Passengers are assured to have a timely departure and arrival 
										with a schedule as frequent as every 20 minutes. All safety 
										requirements are met by the uniquely designed coaches. 
										Plusliner is the best choice for travelling to arrive safely and timely!
									</p>";
									echo "<p>
										Capacity         : 32-seater <br>
										Doors            : 4 (1 driver side door, 2 emergency exit doors, 1 passenger door) <br>
										Transmission     : Automatic
									</p>";
									echo "<a class='text-uppercase primary-btn' href='busbooking.php'>Book This Bus Now</a>";
								echo "</div>";
								echo "<div class='col-lg-6 model-right'>";
									echo "<img class='img-fluid' src='img/plusliner_thumbnail.png' alt='Plusliner'>";
								echo "</div>";
							echo "</div>";
						echo "</div>";
					echo "</div>";
				echo "</section>";
			?>
			<!-- End Model Area -->

	<!-- Start Footer Area -->
	<?php
	
		include('footer.php');
		
	?>
	<!-- End Footer Area -->



