
	<?php 
	
	$connection = mysqli_connect("localhost", "root", "", "bus_database");
	
			$Username = $_GET['delete'];
			$queryslt = "SELECT * FROM booking WHERE Username = '$Username'";
			$querydlt = "DELETE  FROM booking WHERE Username = '$Username' ";
			
			if(mysqli_query($connection,$querydlt)) 
			{
				
				echo "<script>alert('Your booking had been deleted.')</script>";
				echo "<br />";
				header("refresh:1; url=adminview.php");
				
			}
			
			else
			{
				echo "<script>alert('Booking is failed to delete from database.')</script>";
			}

	mysqli_close($connection);
	
	
	?>