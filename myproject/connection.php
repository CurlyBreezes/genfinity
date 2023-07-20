<?php 
$conn = new mysqli('localhost', 'root', '', 'jezelledb');

if (!$conn){
    die(mysqli_error($conn));
}

?>