
<?php
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

    $sql="SELECT * from admission";
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
        include 'admin_sidebar.php';
    ?>

    <div class="content">
		<center>
		<h1>Applied For Admission</h1>

        <table border="1px">
            <tr>
                <th style="padding: 20px; font-size: 15px;">Name</th>
                <th style="padding: 20px; font-size: 15px;">Email</th>
                <th style="padding: 20px; font-size: 15px;">Phone</th>
            </tr>

            <?php
            while($info= $result->fetch_assoc())
            {
            ?>

            <tr>
                <td style="padding: 20px;">
                    <?php echo "{$info['name']}"; ?>
                </td>
                <td style="padding: 20px;">
                    <?php echo "{$info['email']}"; ?>
                </td>
                <td style="padding: 20px;">
                    <?php echo "{$info['phone']}"; ?>
                </td>
            </tr>
            <?php
            }
            ?>

        </table>

        </center>
    </div>
</body>
</html>