
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Promote Player</title>
<link rel="stylesheet" href="../../css/style.css" />
</head>
<body>
<?php
	require('../../sync/conn.php');
   include "../../sync/sync2.php";
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['roleid'])){
		$accid = $_POST['accid'];
		$roleid = $_POST['roleid'];

        $query = "INSERT into `roleassign` (roleID, accountID) VALUES ('$accid', '$roleid')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>Promote successfully.</h3><br/>Click here to <a href='../promote'>Continue</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Promote Player </h1>
<form action="" method="post">
<input type="number" name="accid" placeholder="AccountID" required />
<input type="number" name="roleid" placeholder="RoleID" required />
<table>
<p><th><input name="submit" type="submit" value="Promote" /></th></p><p><th><a href="../promote"><input type="button" value="Back"/></th></p></table>

</form>
 <br /><br />
For More GDPS Fixer By: <a href="http://famry-amri.rf.gd">Famry Amri</a>
</div>
<?php } ?>
</body>
</html>
