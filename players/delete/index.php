<?php
require('../../sync/conn.php');
$userName =$_REQUEST['userName'];
$query = "DELETE FROM accounts WHERE userName='".$userName."'"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: ../"); 
?>