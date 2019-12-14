<?php
require('../../sync/conn.php');
include("../../sync/sync1.php");
$roleID =$_REQUEST['levelID'];
$query = "SELECT * from levels where levelID='".$roleID."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Level Info</title>
<link rel="stylesheet" href="../../css/style.css" />
</head>
<body>
<div class="form"><b> 
<p><a href="../../">Home</a> | <a href="../../logout">Logout</a></b></p>
<h1>Update Level Info</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$roleID = $_REQUEST['levelID'];
$rolename =$_REQUEST['levelName'];
$level =$_REQUEST['password'];
$color =$_REQUEST['original'];
;
$update="UPDATE levels SET levelName='".$rolename."', password='".$level."', original='".$color."' WHERE levelID='".$roleID."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Updated Successfully. </br></br><a href='../'>Check Levels?</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="levelID" type="hidden" value="<?php echo $row['levelID'];?>" />
<p><input type="text" name="levelName" placeholder="Enter LevelName" required value="<?php echo $row['levelName'];?>" /></p>
<p><input type="text" name="password" placeholder="Enter Password" required value="<?php echo $row['password'];?>" /></p>
<label><b>Orginal Level </label>
<p><input type="radio" name="original" value="0">Disable</p>
<p><input type="radio" name="original" value="<?php echo $row['orginal'];?>">Normal</p>

<table>
<p><th><input name="submit" type="submit" value="Update" /></th></p><p><th><a href="../"><input type="button" value="Cancel"/></th></p></table>
</form>
<?php } ?>

<br>
<a href="../../help">Need Help?</a>
<br /><br /><br /><br />
For More GDPS Fixer By: <a href="http://famry-amri.rf.gd">Famry Amri</a>
</div>
</div>
</body>
</html>
