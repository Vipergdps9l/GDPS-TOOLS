<?php
require('../sync/connection.php');
include("../sync/sync1.php");
$ID =$_REQUEST['ID'];
$query = "SELECT * from songs where ID='".$ID."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Songs</title>
<link rel="stylesheet" href="../css/style.css" />
</head>
<body>
<div class="form"><b> 
<p><a href="../songs">Back</a> | <a href="add.php">Upload Songs</a> | <a href="../logout">Logout</a></b></p>
<h1>Update Songs</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$ID =$_REQUEST['ID'];
$Song =$_REQUEST['songs'];
$artist = $_REQUEST['artist'];
$name =$_REQUEST['name'];
;
$update="UPDATE songs SET ID='".$Song."', name='".$name."', authorName='".$artist."' WHERE `songs`. ID='".$ID."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Updated Successfully. </br></br><a href='../songs'>Check Songs?</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="ID" type="hidden" value="<?php echo $row['ID'];?>" />
<p><b>ID Song </b></p>
<input type="number" name="songs" placeholder="ID" value="<?php echo $row['ID'];?>" required>
<p><b>Name </b></p>
<input type="text" name="name" placeholder="Name" value="<?php echo $row['name'];?>" required>
<p><b>Author</b></p>
<input type="text" name="artist" placeholder="Author" value="<?php echo $row['authorName'];?>" required>
<table>
<p><th><input name="submit" type="submit" value="Add" /></th></p><p><th><a href="../songs"><input type="button" value="Back"/></th></p></table>
</form>
<?php } ?>

<br /><br /><br /><br />
For More GDPS Fixer By: <a href="http://famry-amri.rf.gd/">Famry Amri</a>
</div>
</body>
</html>
