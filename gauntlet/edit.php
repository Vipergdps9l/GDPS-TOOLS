<?php
require('../../config/connection.php');
$conn = mysqli_connect ($servername, $username, $password, $dbname);
include("../sync/sync1.php");
$id =$_REQUEST['ID'];
$query = "SELECT * from `gauntlets` where ID='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error($conn));
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Gauntlet</title>
<link rel="stylesheet"  type="text/css" href="../css/style.css" />
</head>
<body>
<div class="form"><b> 
<p><a href="../gauntlet">Back </a> | <a href="../logout">Logout</a></b></p>
<h1>Update Gauntlet</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$A = $_REQUEST['level1'];
$B =$_REQUEST['level2'];
$C =$_REQUEST['level3'];
$D =$_REQUEST['level4'];
$E = $_REQUEST['level5'];
;
$update="UPDATE `gauntlets` SET level1='".$A."', level2='".$B."', level3='".$C."', level4='".$D."', level5='".$E."' WHERE ID='".$id."'";
mysqli_query($conn, $update) or die(mysqli_error());
$status = "Updated Successfully. </br></br><a href='../gauntlet'>Click Here To Continue</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="ID" type="hidden" value="<?php echo $row['ID'];?>" />
Level1 : 
<input type="number" name="level1" placeholder="Put LevelID Here" required value="<?php echo $row['level1'];?>" /><br>
Level2 :
<input type="number" name="level2" placeholder="Put LevelID Here" required value="<?php echo $row['level2'];?>" /><br>
Level3 :
<input type="number" name="level3" placeholder="Put LevelID Here" required value="<?php echo $row['level3'];?>"><br>
Level4 :
<input type="number" name="level4" placeholder="Put LevelID Here" required value="<?php echo $row['level4'];?>"><br>
Level5 :
<input type="number" name="level5" placeholder="Put LevelID Here" required value="<?php echo $row['level5'];?>"><br>

<table>
<p><th><input name="submit" type="submit" value="Update" /></th></p><p><th><a href="../gauntlet"><input type="button" value="Cancel"/></th></p></table>
</form>
<?php } ?>

<br>
<a href="../help">Need Help?</a>
<br /><br /><br /><br />
For More GDPS TOOL By: <a href="http://famry-amri.rf.gd">FamryAmri</a>
</div>
</div>
</body>
</html>
