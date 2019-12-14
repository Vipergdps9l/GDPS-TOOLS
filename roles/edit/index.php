<?php
require('../../sync/conn.php');
include("../../sync/sync1.php");
$roleID =$_REQUEST['roleID'];
$query = "SELECT * from roles where roleID='".$roleID."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Role</title>
<link rel="stylesheet" href="../../css/style.css" />
</head>
<body>
<div class="form"><b> 
<p><a href="../../">Home</a> | <a href="../add">Add Roles</a> | <a href="../../logout">Logout</a></b></p>
<h1>Update Role</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$roleID = $_REQUEST['roleID'];
$rolename =$_REQUEST['rolename'];
$level =$_REQUEST['level'];
$color =$_REQUEST['color'];
;
$update="UPDATE roles SET roleName='".$rolename."', commentColor='".$color."', modBadgeLevel='".$level."' WHERE roleID='".$roleID."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Updated Successfully. </br></br><a href='../'>Check Roles?</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="roleID" type="hidden" value="<?php echo $row['roleID'];?>" />
<p><input type="text" name="rolename" placeholder="Enter Name" required value="<?php echo $row['roleName'];?>" /></p>
<p><input type="text" name="level" placeholder="Enter Mod Level 1/2" required value="<?php echo $row['modBadgeLevel'];?>" /></p>
<p><input type="text" name="color" placeholder="Enter RGB Color" required value="<?php echo $row['commentColor'];?>"/></p>
<table>
<p><th><input name="submit" type="submit" value="Update" /></th></p><p><th><a href="../"><input type="button" value="Cancel"/></th></p></table>
</form>
<?php } ?>

<br /><br /><br /><br />
For More GDPS Fixer By: <a href="http://famry-amri.rf.gd">Famry Amri</a>
</div>
</div>
</body>
</html>
