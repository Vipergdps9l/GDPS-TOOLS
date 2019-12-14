<?php
require('../sync/connection.php');
include("../sync/sync1.php");
$ID =$_REQUEST['ID'];
$query = "SELECT * from quests where ID='".$ID."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Quests</title>
<link rel="stylesheet" href="../css/style.css" />
</head>
<body>
<div class="form"><b> 
<p><a href="../quests">Back</a> | <a href="add.php">Add Quest</a> | <a href="../logout">Logout</a></b></p>
<h1>Update Quests</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$ID =$_REQUEST['ID'];
$type = $_REQUEST['type'];
$amount =$_REQUEST['amount'];
$reward =$_REQUEST['reward'];
$name =$_REQUEST['name'];
;
$update="UPDATE quests SET type='".$type."', amount='".$amount."', reward='".$reward."', name='". $name."' WHERE ID='".$ID."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Updated Successfully. </br></br><a href='../quests'>Check Quests?</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="ID" type="hidden" value="<?php echo $row['ID'];?>" />
<p><b>Name </b></p>
<input type="text" name="name" placeholder="Name" value="<?php echo $row['name'];?>" required>
<p><b>Select Type Item <?php echo $row['type'];?></b></p>
<input type="radio" name="type" value="1" required />
1= 
Orbs
<input type="radio" name="type" value="2" required />
2 = 
Coins
<input type="radio" name="type" value="3" required />
3 = 
Stars
<p><b>Amount To Collect </b></p>
<input type="number" name="amount" placeholder="~" value="<?php echo $row['amount'];?>" required />
<p><b>Reward Diamond</b></p>
<input type="number" name="reward" placeholder="~" value="<?php echo $row['reward'];?>" required/>
<table>
<p><th><input name="submit" type="submit" value="Add" /></th></p><p><th><a href="../quests"><input type="button" value="Back"/></th></p></table>
</form>
<?php } ?>

<br /><br /><br /><br />
For More GDPS Fixer By: <a href="http://famry-amri.rf.gd/">Famry Amri</a>
</div>
</body>
</html>
