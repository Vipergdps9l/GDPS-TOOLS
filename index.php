<!DOCTYPE html>
<?php
require "sync/conn1.php";
include("sync/authorize.php");
$username =$_SESSION['username'];
$query = "SELECT * from modtools ORDER BY username='".$username."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
 ?>
<html>
<head>
<meta charset="utf-8">
<title>GDPS TOOLS</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<h1 align="center"><img src="icon.png" style="height: 101px; width:172px;"></h1>
<p>Welcome To GDPStools, <?php echo $_SESSION['username']; ?>!</p>
<p><a href="mod">Moderator Tools</a></p>
<p><a href="players">Accounts</a></p>
<p><a href="quests">Add Quests</a></p>
<p><a href="gauntlet">Gauntlet </a></p>
<p><a href="songs">Song Edit</a></p>
<p><a href="level">Level Edit</a></p>
<p><a href="pwd/index.php?username=<?php echo $row['username'];?>">Change Info</a></p>
<p><a href="help">Need Help?</a></p>
<a href="logout">Logout</a>


<br /><br /><br /><br />
For More GDPS TOOL By: <a href="http://famry-amri.rf.gd/">FamryAmri</a>
</div>
</body>
</html>
