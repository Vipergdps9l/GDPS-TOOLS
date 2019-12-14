
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Delete Level <?php echo $id;?></title>
<link rel="stylesheet" href="../../css/style.css" />
</head>
<body>
<div class="form"><b> 
<p><a href="../../">Home</a> | <a href="../../logout">Logout</a></b></p>
<h1>Delete Level <?php echo $id;?></h1>
<?php
require('../../sync/conn.php');
if (isset($_POST['submit'])){
$id=$_REQUEST['levelID'];
$query = "DELETE FROM levels WHERE levelID='".$id."'"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
$path = "../../../data/levels/".$id;
unlink($path);
echo "<a href='../'>Delete Success </a>";
} else {
?>
<form action="" method="POST">
	<p>Are You Sure You Want To Delete This Level?</p>
	<input type="submit" name="submit" value="Yes">        <a href="../"><input type="button" value="No"></a>
	<?php };?>
<br><br><br>
<a href="../../help">Need Help?</a>
<br /><br /><br /><br />
For More GDPS Fixer By: <a href="http://famry-amri.rf.gd">Famry Amri</a>
</div>
</div>
</body>
</html>