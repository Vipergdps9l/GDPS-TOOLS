<?php
require('../sync/connection.php');
include("../sync/sync1.php");
$username =$_REQUEST['username'];
$query = "SELECT * from modtools where username='".$username."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Change Password</title>
<link rel="stylesheet" href="../css/style.css" />
</head>
<body>
<div class="form">
<p><b><a href="../">Back</a> | <a href="../logout">Logout</a></b></p>
<h1>Change Password</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$trn_date = date("Y-m-d H:i:s");
$password =$_REQUEST['password'];
$pin =$_REQUEST['pin'];
$username = $_REQUEST["username"];
$update="update modtools set username='". $username."', pinCode='". $pin."', password='". $password."', trn_date='".$trn_date."' where id='".$id."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Change Successfully. </br></br><a href='logout.php'>Click Here to Relogin</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="username" placeholder="Username" required value="<?php echo $row['username'];?>" required/></p>
<p><input type="number" name="pin" placeholder="Pin Code" required value="<?php echo $row['pinCode'];?>" required/></p>
<p><input type="password" name="password" value="<?php echo $row['password'];?>" placeholder="Password" required>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>

<br /><br /><br /><br />
</div>
</div>
</body>
</html>
