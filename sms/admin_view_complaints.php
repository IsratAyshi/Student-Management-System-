<?php
error_reporting(0);
session_start();

    if(!isset($_SESSION['username']))
    {
        header("location: login.php");
    }
    elseif($_SESSION['usertype']!='admin')
    {
        header("location: login.php");
    }


    $host="localhost";
    $user="root";
    $password="";
    $db="studentmanagement";

    $data=mysqli_connect($host,$user,$password,$db);


    $sql="SELECT * from complain";

    $result=mysqli_query($data,$sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
</head>

<body>
    
    <?php
        include 'staff_sidebar.php';

    ?>

    <div class="content">
        
        <h1>Student's Complaints</h1>

        <?php
            if($_SESSION['message'])
            {
                echo $_SESSION['message'];
            }
            unset($_SESSION['message']);
        ?>

        <table border="1px">
            <tr>
                <th style="padding: 20px; font-size: 15px;">User Name</th>
                <th style="padding: 20px; font-size: 15px;">Email</th>
                <th style="padding: 20px; font-size: 15px;">Subject</th>
                <th style="padding: 20px; font-size: 15px;">Description</th>
                
            </tr>

            <?php
            while($info= $result->fetch_assoc())
            {
            ?>

            <tr>
                <td style="padding: 20px; background-color:skyblue;">
                    <?php echo "{$info['student_id']}"; ?>
                </td>
                <td style="padding: 20px; background-color:skyblue;">
                    <?php echo "{$info['email']}"; ?>
                </td>
                <td style="padding: 20px; background-color:skyblue;">
                    <?php echo "{$info['com_subject']}"; ?>
                </td>
                <td style="padding: 20px; background-color:skyblue;">
                    <?php echo "{$info['com_description']}"; ?>
                </td>
                
                
            </tr>
            <?php
            }
            ?>

        </table>

    </div>
</body>
</html>