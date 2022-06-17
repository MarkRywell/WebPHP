<?php include ("connection.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-Homepage</title>

    <style>
        h1 {
            text-align: center;
        }
        body {
            background-color: #c4f0ff;
        }
        .records {
            background-color: #c0eeff;
        }
        .user_log {
            background-color: #cccccc;
        }
        table {
            margin: 0 auto;
            font-size:medium;
            border: 1px solid black;
        }
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
        th {
            background-color: #fddeca;
        }
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        .action {
            background-color: #fddeca;
            font-weight: bold;
        }
        td {
            font-weight: lighter;
        }
        .std_id {
            width:100px;
        }
        .section_title {
            text-align: center;
            margin: 30px;
            background-color: blue;
        }
        input[type=button] {
            background-color: #a7b0fa;
            width: 150px;
            border: none;
            color: white;
            padding: 10px;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 2px;
            cursor: pointer;
            border-radius: 8px;
            position: absolute;
            bottom: 150px;
            left: 875px;
            transition: 0.3s;
            
        }
        input[type=button]:hover {
            box-shadow: 2px 3px 10px 5px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
    <h1>Welcome User!</h1>

    <div class="container">
        <div class="header"><h1>Student Database</h1></div>
            <div class="records"><h2 style="text-align:center;">Records</h2>
                <table border=1>
                    <tr>
                        <th class='std_id'>Student ID</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Middle Initial</th>
                        <th>Course</th>
                        <th>Year</th>
                        <th>Status</th>
                        <td colspan="2" class='action'>Action</td>
                    </tr>
                    <?php 
                    $sql = "SELECT * FROM students";
                    $result = $conn->query($sql);
                    $conn->close(); 
                    while($rows=$result->fetch_assoc())
                        {
                    ?>
                    <tr>
                        <td><?php echo $rows['studID'];?></td>
                        <td><?php echo $rows['lastName'];?></td>
                        <td><?php echo $rows['firstName'];?></td>
                        <td><?php echo $rows['MI'];?></td>
                        <td><?php echo $rows['course'];?></td>
                        <td><?php echo $rows['yearlevel'];?></td>
                        <td><?php echo $rows['status'];?></td>
                        <td align='center'><a style='text-decoration:none;' href="delete copy.php/?studID=<?php echo $rows["studID"]?>">Delete</a></td>
                        <td><a href="update-process.php?studID=<?php echo $rows["studID"]; ?>">Update</a></td>
                    </tr>
                    <?php
                        }
                        ?>
                </table>
            </div>
        </div>
                
            <a href='index.php'><input type='button' value='Back to Login Page'></a> 
    </div>
</body>
</html>