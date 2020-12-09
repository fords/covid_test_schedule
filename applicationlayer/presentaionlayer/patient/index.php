
<?php include ('../../datalayer/server.php');
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
			<!-- <li><a href="result.php">Result</a>  	</li> -->
			<li><a href="../../index.php">Logout</a></li>







		</ul>




	</nav>




</header>
<body >
		<div class="headerP" style="width: 15%;margin-top: 60px;color: white;background: #39ca74;text-align: center;border-radius: 10px 10px 5px 5px;border-bottom: none; border :1px solid #39ca74;padding: 10px;margin-left:-4px   ">
	<h2>My Information</h2>
</div>



<form method="post" action="index.php"  class="infoP" style="margin-left:-1px; margin-top:0px ;width: 40%;padding: 20px;border :3px solid #39ca74 ;background: white; border-radius: 10px 10px 10px 10px;">






	<div class="contentP" style="font-weight: bold;">



		<!-- <label>ID: <php echo $temp; echo"</br>" ?></label> -->





			<?php $result13 = mysqli_query($mysqli, "SELECT * FROM patients ");  ;
			// $result13=$mysqli->query($sql13);
			if(mysqli_num_rows($result13)>1){



				while ($row13=$result13->fetch_assoc()) {
						// echo "test";
					if ($row13["UserID"] == $temp ){
						echo "ID : ";
			 	    echo $row13["UserID"];
						echo "</br>";

						echo "Name : ";
			 	    echo $row13["Name"];
						echo "</br>";

						echo "Address : ";
			 	    echo $row13["Address"];
						echo "</br>";

						echo "Email : ";
			 	    echo $row13["Email"];
						echo "</br>";
					}

				}
			}

			?>
	</div>




</div>
	<div class="input-group">
		<button type="submit" name="feedback" class="btn" style=" border-radius: 5px;margin-left: 80%; border:none;padding: 10px 30px 10px 30px">Medical Notes Submit</button>
	</div>


</form>

	<?php


	  if (isset($_POST['feedback'])) {
?>
<form method="post" action="index.php" class="infoP" style="margin-left:500px; margin-top:0px ;width: 40%;padding: 20px ;
border:none ;background: white; ">
<div class="input-group">
		<div  class="header" style="width: 78%;height: 25px;margin-top:-450px;color: white;background: #39ca74;text-align: center;border-radius: 10px 10px 5px 5px;border-bottom: none; border :1px solid #39ca74;padding: 10px 13px 10px 13px;margin-left:60%  ">
	<h2> Medical history</h2>
</div>
<textarea name="feedx" placeholder="Write something.." style="height:300px;width: 500px ; margin-top:0px;margin-left: 60%;border:2px solid #39ca74;border-radius: 10px" ></textarea>
<button type="submit" name="sendfeedback" class="btn" style=" border-radius: 15px 15px 15px 15px;margin-left: 60.5%; margin-top: 1px; border:1px solid #80DA9D ;padding: 10px 230px 10px 230px ; text-align: center;" >Send</button>



</div>


 <?php  }


?>
</form>



</body>
</html>

<!--<?php if (isset($_SESSION['success'])) : ?>
            <div class="error success" >
                <h3>
                    <?php

                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>

        $Studentsearch = mysqli_real_escape_string($mysqli,$_POST['Studentsearch']);

	$query="SELECT * FROM patients WHERE UserID=('$Studentsearch')";
	$result2=mysqli_query($mysqli,$query);


        <!-- information of the user logged in -->
        <!-- welcome message for the logged in user -->
