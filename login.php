	<!-- Start Header Area -->
	<?php
		
		//Include header
		include('header.php');
		
	?>
	<!-- End Header Area -->
	

			<!-- start banner Area -->
			<?php
				echo "<section class='banner-area relative' id='home'>";
					echo "<div class='overlay overlay-bg'></div>";
					echo "<div class='container'>";
						echo "<div class='row d-flex align-items-center justify-content-center'>";
							echo "<div class='about-content col-lg-12'>";
								echo "<h1 class='text-white'>
									Login
								</h1>";	
								echo"<p class='text-white link-nav'><a href='index.php'>Home </a>  <span class='lnr lnr-arrow-right'></span>  <a href='login.php'>Login</a></p>";
							echo "</div>";											
						echo "</div>";
					echo "</div>";
				echo "</section>";
			?>
			<!-- End banner Area -->	

			<!--Start of Login Area -->
			<?php
			include("busdatabase.php");
				//Validation
				if(isset($_POST['submitted']))
				{
					
					$email = $_POST['email'];
					$password = $_POST['password'];
					
					$valid = true;
					$uppercase = preg_match('@[A-Z]@', $password);
					$lowercase = preg_match('@[a-z]@', $password);
					$number    = preg_match('@[0-9]@', $password);
					$specialChars = preg_match('@[^\w]@', $password);
					
					while ($email == 'admin@gmail.com' && $password == 'admin') 
					{ 
						echo "<script>alert('You have been sign in successfully!');
							window.location='adminview.php'</script>";
					}
					
					if(empty($email))
					{
						echo"<script>alert('Please enter your email')</script>";
					}
					
					else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
					{
						echo"<script>alert('Invalid email format!Must required @!')</script>";
					}
					
					else if(empty($password))
					{
						echo"<script>alert('Please enter your password')</script>";
					}
					
					else if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) 
					{
						if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8)
						{
							echo "<script>alert('Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.')</script>";
						}
						else
						{
							echo 'Strong password.';
						}
					}
					
					else
					{
						$query="SELECT * from register where email='$email' and password='$password'";
						
						if($r = mysqli_query($store,$query)) 
						{
							if(mysqli_fetch_array($r))
							{	
								$_SESSION['email'] = $_POST['email'];
								echo"<script>alert('Login successfully!')</script>";
								header("location:index.php");
								
								
								
								//$SESSION['email'] = $email;
								//echo"<script>alert('Login successfully!')</script>";
								//header("location:index.php");
								
								///this should out if user is login to home will display out his email
							//	if(isset($_COOKIE['email'] and isset($_COOKIE['password'])))
							//	{
							//		$email = $_COOKIE['email'];
							//		$password = $_COOKIE['password'];
							//		echo ' WelCome ' . $_SESSION['email'].'<br/>';
									//echo"<script>
									//	'Welcome' . $_SESSION['email'].;
									//</script>"
							//	}
							}
							
							else
							{
							
								echo"<script>alert('Account not found!Please register an account')</script>";
							
							}	
							
						}
						
						
					
					}
				}
					

				echo "<form action='login.php' method='post' style='border:1px solid #ccc'>";
				//Provide a container
				echo "<div class='container'>";
				echo "<div class='row justify-content-center'>";
				echo "<div class='col-lg-10'>";
				//Display message
				

				//list of login in table format
				echo "<table align = 'center' cellspacing = '50' width = '500' height = '500'>";
					echo "<tr align = 'center'>";
						//Let user enter email
						echo "<td><label for='email'><b>Email: </b></label>";
						echo "<br /><input type='text' placeholder='Enter Your Email' name='email' id = 'email'></td>";
						echo "</tr>";

					echo "<tr align = 'center'>";
						//Let user enter password
						echo "<td><label for='password'><b>Password: </b></label>";
						echo "<br /><input type='password' placeholder='Enter Your Password' name='password'></td>";
						echo "</tr>";

					echo "<tr align = 'center'>";
						//Let user to click the checkbox
						echo "<td><label><input type='checkbox' checked='checked' name='remember'> Remember me</label></td>";
					echo "</tr>";


					//login button
					echo "<tr align = 'center'>";
						echo"<td><input type = 'hidden' name = 'submitted' value = 'true'/><button type='submit' class='text-uppercase primary-btn'>Login</button></td>";
					echo "</tr>";
				
					//link to register page
					echo "<tr align = 'center'>";
						echo "<td><font-size='-1'>Don't have an account? <a href='register.php'>REGISTER</a></font>.</td>";
					echo "</tr>";
				echo"</table>";

				echo"</form>";
				
				//break
				echo"<br/>";
				
				echo "</div>";
				echo "</div>";
				echo "</div>";
				
				echo"</form>";
			?>
		
			<!--End of Login Area -->

	<!-- Start Footer Area -->
	<?php
		
		//Include footer
		include('footer.php');
		
	?>
	<!-- End Footer Area -->