<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet"  href="style5.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>COVID<span>Testing</span></h1>
		<nav>




		<ul>



			<li><a href="index3.php">Add/Delete Location</a></li>
			<li><a href="viewdoctor.php">View Location</a></li>
			<!-- <li><a href=" viewpatients.php">View Students</a></li> -->
			<li><a href="viewappointments.php">View Appointments</a></li>
			<!-- <li><a href="searchdonoradmin.php">Search Donor</a></li> -->
						<li><a href="feedback.php"> Notes by students</a></li>


			<li><a href="../../index.php">Logout</a></li>







		</ul>




	</nav>




</header>

<body>
	<h1 style="margin-left:35% ;margin-top:80px"   class="asd">Testing Location Information</h1>
	<table class="table4">
		<tr>
		<th>Testing Site ID</th>
		<th>Supervisor Name</th>
		<th>Email</th>
		<th>Address</th>
		<th>Phone Number</th>
		<th>Category</th>

		</tr>

		<?php $sql3="SELECT  * FROM  doctor " ;
		$result3=$mysqli->query($sql3);
		if(mysqli_num_rows($result3)>=1){
			while ($row3=$result3->fetch_assoc()) {

				echo "<tr><td>".$row3["DoctorID"]."</td><td>".$row3["Doctorname"]."</td><td>".$row3["email"]."</td><td>".$row3["Address"]."</td><td>".$row3['ContactNumber']."</td><td>".$row3["categorey"]."</td></tr>";
			}


			echo "</table";



		}

		?>

	</table>
</body>
</html>
