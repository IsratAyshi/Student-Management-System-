<?php

session_start();

$host="localhost";
$user="root";
$password="";
$db="studentmanagement";

$data=mysqli_connect($host,$user,$password,$db);

if($_GET['student_id'])
{
    $student_id= $_GET['student_id'];
    $sql="DELETE FROM complain WHERE student_id='$student_id' ";
    $result=mysqli_query($data,$sql);

    if($result)
    {
        
        header("location: view_complaints.php");
    }
}

?>