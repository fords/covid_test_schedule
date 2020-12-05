<?php include ('../../datalayer/bookserver.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet"  href="style5.css" type="text/css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>COVID<span>Testing</span></h1>
		<nav>




		<ul>


			<li><a href="index3.php">Add/Delete Location</a></li>
			<li><a href="viewdoctor.php">View Site Location</a></li>
			<li><a href=" viewpatients.php">View Students</a></li>
			<li><a href="viewappointments.php">View Appointments</a></li>
			<li><a href="feedback.php">Notes by Students</a></li>

  			<li><a href="../../applicationlayer/index.php">Logout</a></li>








		</ul>




	</nav>




</header>
<body>

		<div class="headerA">
	<h2>Add Testing Site</h2>
</div>

<form method="post" action="index3.php">

	<?php include ('../../datalayer/errors.php'); ?>

	<div class="input-groupA">
		<label>Test Location ID</label>
		<input type="text" name="addID" >

	</div>


	<div class="input-groupA">
		<label>Supervisor Name</label>
		<input type="text" name="addname" >


	</div>

	<div class="input-groupA">
		<label>Address</label>
		<input type="text" name="addAddress">

	</div>

	<div class="input-groupA">
		<label>Phone Number</label>
		<input type="text" name="addContactNumber">


	</div>


	<div class="input-groupA">
		<label>Email address</label>
		<input type="text" name="addEmail">

	</div>
<!--
	<div class="input-groupA">
		<label>Password</label>
		<input type="text" name="addpassword">

	</div> -->
<div class="input-groupA">
	<label>Category</label>
	   	<select name="addcategory" class="xd">
	   		<option value="COVID TEST" >COVID TESTING</option>

	   	</select>
	   	</div>


			<!-- <option value="heart">heart</option>
			<option value="Dentistry">Dentistry</option>
			<option value="MentalHealth">Mental Health</option>
			<option value="Surgery">Surgery</option> -->

	<div class="input-groupA">
		<button type="submit" name="Add" class="btnA">Add Test Location</button>
	</div>







</form>
	<div class="headerAD">
	<h2>Test Location</h2>
</div>

<form method="post" action="index3.php" class="delete">

	<div class="input-groupA">
		<label>Test Location</label>
		<input type="text" name="deleteID" >

	</div>

	<div class="input-groupA">
		<button type="submit" name="Delete" class="btnA">Delete</button>
	</div>

</form>







</body>
</html>
