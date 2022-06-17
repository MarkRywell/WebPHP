<?php

include("connection.php");?>

<?php if(isset($_GET['studID'])): echo "<br>"?>
        Deleted <?php echo "Student ID:  " . $_GET["studID"]; ?>
		<?php echo "<br><br><br>"?>
<?php endif; ?>

<?php
$query = mysqli_query($conn,"UPDATE students SET status='Deleted' WHERE studID='" . $_GET['studID']."'") or die(mysqli_error());

if(!$query){
	echo "Record not deleted! \n";
	
}
else{
	echo"Record successfully deleted \n";
	echo "<br>";
}

$value = $_GET["studID"];


$userlvl = mysqli_query($conn, "SELECT user_level FROM students WHERE studId= '$value'") or die(mysqli_error());
$result = mysqli_fetch_array($userlvl);


$value2 = $result["user_level"];

if ($value2 == "admin"){
	echo "<br> <a href='../Admin-homepage.php'><input type='button' value='Back to Admin'/></a>";
}
else {
	echo "<br> <a href='../User-homepage.php'><input type='button' value='Back to User'/></a>";
}

?>