<?php
session_start();

    if(!isset($_SESSION['username']))
    {
        header("location: login.php");
    }
    elseif($_SESSION['usertype']!='student')
    {
        header("location: login.php");
    }


$host="localhost";

$user="root";

$password="";

$db="studentmanagement";


$data=mysqli_connect($host,$user,$password,$db);


$name=$_SESSION['username'];

$sql="SELECT * FROM user WHERE username='$name' ";

$result=mysqli_query($data,$sql);

$info=mysqli_fetch_assoc($result);




if(isset($_POST['update_complaints']))
    {
	    //$student_id=$_POST['student_id'];
        //$c_code=$_POST['course_code'];
        $com_description=$_POST['com_description'];
        $com_subject=$_POST['com_subject'];
        
        $sql_assign = "INSERT INTO complain(student_id, com_description, com_subject, email) VALUES ('{$info['username']}', '$com_description', '$com_subject', '{$info['email']}')";
        
        $result=mysqli_query($data,$sql_assign);

        if($result)
        {
            echo "<script type='text/javascript'>
			    alert('Complain Added Successfully');
		        </script>";
        }

        else
        {
            echo "<script type='text/javascript'>
			    alert('Complain Submission Failed');
		        </script>";
        }
    
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php

	include 'student_css.php'

	?>

	<style type="text/css">
		
		label
		{

		display: inline-block;
		text-align: right;
		width: 100px;
		padding-top: 10px;
		padding-bottom: 10px;

		}

		.div_deg
		{
			background-color: skyblue;
			width: 500px;
			padding-top: 70px;
			padding-bottom: 70px;
		}
	</style>

</head>

<body>

	<?php

	include 'student_sidebar.php'

	?>

	<div class = "content">

		<center>

			<h1>Complaints</h1>
			<br><br>

		<form action="#" method="POST">

			<div class="div_deg">





			


			<div>
				<label>Name</label>
				<input type="text" name="name" value="<?php echo "{$info['username']}" ?>">
			</div>


			<div>
				<label>Phone</label>
				<input type="number" name="phone" value="<?php echo "{$info['phone']}" ?>">
			</div>

			<div>
				<label>Subject</label>
				<input type="text" name="com_subject">
			</div>


			<div>
				<label>Complaint</label>
				<input type="text" name="com_description">
			</div>


			<div>
	
				<input type="submit" class="btn btn-primary"name="update_complaints" value="Submit">
			</div>

			</div>


		</form>

		</center>

	</div>


</body>
</html>