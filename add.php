<?php 
include 'connectdb.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$age = $_POST['age'];
$email = $_POST['email'];
$active = $_POST['active'];

$sql = "INSERT INTO STUDENT (first_name, last_name, age, email, active) VALUES ('$first_name', '$last_name', '$age', '$email', '$active')";

if(mysqli_query($link, $sql)){
    echo "Student added successfully.  <a href='view.php'>View Students</a>";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

?>