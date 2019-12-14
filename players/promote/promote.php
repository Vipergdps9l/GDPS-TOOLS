<?php
require('../../sync/conn.php');
include("../../sync/sync2.php");
$id =$_REQUEST['assignID'];
$query = "SELECT * from roleassign where assignID='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Player</title>
<link rel="stylesheet" href="../../css/style.css" />
</head>
<body>
<div class="form">
<p><a href="../../">Home</a> | <a href="../../roles/add">Add Roles</a> | <a href="../../logout">Logout</a></p>
<h1>Update Player</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{

$id =$_POST['id'];
$roleid =$_POST['roleid'];

;
$update="UPDATE roleassign SET roleID='".$roleid."' where assignID='".$id."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Updated Successfully. </br></br><a href='../promote'> Updated Success </a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['assignID'];?>" />
<p>
       <input type="number" name="roleid" placeholder="RoleID" value="<?php echo $row['roleID'];?>"></p>
<table>
<p><th><input name="submit" type="submit" value="Update" /></th></p><p><th><a href="../promote"><input type="button" value="Cancel"/></th></p></table>

</form>
<?php } ?>

<br /><br /><br /><br />
For More GDPS Fixer By: <a href="http://famry-amri.rf.gd/">Famry Amri</a>
</div>
</div>
</body>
</html>
