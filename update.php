<?php
include 'connectdb.php';

$id = $_POST['id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$age = $_POST['age'];
$email = $_POST['email'];
$active = isset($_POST['active']) ? 1 : 0;

$query = "UPDATE STUDENT SET 
          first_name = '$first_name',
          last_name = '$last_name',
          age = $age,
          email = '$email',
          active = $active
          WHERE id = $id";

if (mysqli_query($link, $query)) {
    echo "Record updated successfully! <a href='view.php'>View Students</a>";
} else {
    echo "Error: " . mysqli_error($link);
}

mysqli_close($link);
?>