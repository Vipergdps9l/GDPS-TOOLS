<?php
/*
Author: Famry Amri
Website: http://famryamrigd.5v.pl/
*/

require('../../sync/conn.php');
$id=$_REQUEST['roleID'];
$query = "DELETE FROM roles WHERE roleID='".$id."'"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: ../../roles"); 
?>