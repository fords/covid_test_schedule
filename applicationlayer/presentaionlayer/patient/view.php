<?php include '../../datalayer/bookserver.php';
$temp= $_SESSION['UserID'] ; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Student</title>
	<link rel="stylesheet"  href="style2.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>COVID<span>Testing</span></h1>
		<nav>




		<ul>


			<li><a href=" index.php">MyInfo</a></li>
			<li><a href=" book.php">Book Appointment</a></li>
			<li><a href=" view.php">View Appointment</a></li>
			<li><a href="cancel.php">Cancel Booking</a></li>
			<!-- <li><a href=" searchlocation.php">Search Test Location</a></li> -->
			<li><a href="../../index.php">Logout</a></li>


		</ul>

	</nav>




</header>

<body>
	<h1 class="my">My<span class="mys">Appointment</span></h1>

	<table class="table2">
		<tr>
		<th>Appointment_ID</th>
		<th>DATE</th>
		<th>TIME</th>
		<th>Location_ID</th>
		<th>Supervisor Name</th>
		<th>Address</th>
		<th>Phone Number</th>
		<th>Category</th>

		</tr>
		<?php $sql3="SELECT  * FROM bookapp , doctor WHERE patientID=$temp AND  docID=DoctorID"  ;
		$result3=$mysqli->query($sql3);
		if(mysqli_num_rows($result3)>=1){
			while ($row3=$result3->fetch_assoc()) {

				echo "<tr><td>".$row3["AppoID"]."</td><td>".$row3["Date"]."</td><td>".$row3["Time"]."</td><td>".$row3["docID"]."</td><td>".$row3['Doctorname']."</td><td>".$row3['Address']."</td><td>".$row3['ContactNumber']."</td><td>".$row3["categorey"]."</td></tr>";
			}


			echo "</table";



		}

		?>

	</table>


<!--	<table class="table3">
		<tr>
		<th>Doctor Name</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Category</th>
		doctor.Doctorname , doctor.Address,doctor.ContactNumber,doctor.category
,doctor
AND docID= ('$userprofile')
.$row3["Doctorname"]."</td><td>".$row3["Address"]."</td><td>".$row3["ContactNumber"]."</td><td>".$row3["category"]

		</tr>


	</table>


-->


</body>
</html>
