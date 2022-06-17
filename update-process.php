<?php
    include_once 'connection.php';
    if(count($_POST)>0) {
        mysqli_query($conn,"UPDATE students set lastName='" . $_POST['lastName'] . "', firstName='" . $_POST['firstName'] . "', MI='" . $_POST['MI'] . "' ,course='" . $_POST['course'] . "', yearlevel='" . $_POST['yearlevel'] . "' WHERE studID='" . $_POST['studID'] . "'");
        $message = "Record Updated Successfully";
    }    
    $result = mysqli_query($conn,"SELECT * FROM students WHERE studID='" . $_GET['studID'] . "'");
    $row= mysqli_fetch_array($result);
?>

<?php if(isset($_GET['studID'])): echo "<br>"?>
        Updating Student ID: <?php echo $_GET["studID"]; ?>
<?php endif; ?>

<html>
<head>
<title>Update Student Data</title>

    <style>
        body {
            background-color: #fff2ba;
        }

    </style>
</head>
<body>
<center>
<form name="frmUser" method="post" action="">
    <div><?php if(isset($message)) { echo $message; } ?>
    </div>
    <div style="padding-bottom:5px;">
    <h2>Student Data</h2>
    </div>
    <input type="hidden" name="studID" class="txtField" value="<?php echo $row['studID']; ?>">
    <br>
    Last Name: <br>
    <input type="text" name="lastName" class="txtField" value="<?php echo $row['lastName']; ?>">
    <br>
    First Name:<br>
    <input type="text" name="firstName" class="txtField" value="<?php echo $row['firstName']; ?>">
    <br>
    Middle Inital:<br>
    <input type="text" name="MI" class="txtField" value="<?php echo $row['MI']; ?>">
    <br>
    Course:<br>
    <input type="text" name="course" class="txtField" value="<?php echo $row['course']; ?>">
    <br>
    Yearlevel:<br>
    <input type="text" name="yearlevel" class="txtField" value="<?php echo $row['yearlevel']; ?>"
    <br>
    <br>
    <br>
    <input type="submit" name="submit" value="Submit" class="buttom">
    <br>
    <br>
    <input type="button" value="Back to Records" onclick="location='Admin-homepage.php'" />
</form>
</center>
</body>
</html>