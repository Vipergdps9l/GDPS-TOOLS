<?php
require('../../config/connection.php');
$con = mysqli_connect ($servername, $username, $password, $dbname);
$id=$_REQUEST['ID'];
$query = "DELETE FROM `gauntlet` WHERE ID='".$id."'"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header ("Location: ../gauntlet"); 
?>