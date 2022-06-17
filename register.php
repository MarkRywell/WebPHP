<?php
//register.php
//Inserts new student record to tbl_students table in newbies_db database.
	include("connection.php");
	echo"<pre>";
	print_r($_POST);
	echo"</pre>";
	
	$query = mysqli_query($conn,"INSERT INTO students (studID, lastName, firstName, MI,course,yearlevel) VALUES ('$_POST[stud_ID]','$_POST[lastName]','$_POST[firstName]','$_POST[MI]','$_POST[course]','$_POST[yearLevel]')") or die(mysql_error());
	$query2 = mysqli_query($conn, "CALL insert_data()");

	if(!$query2){
		echo "Alert! Student not added.";
	}
	else{
		echo "Student successfully added!";
	}
	
	echo "<a href='./index.php'><input type='button' value='Back'/></a>";
	
?>