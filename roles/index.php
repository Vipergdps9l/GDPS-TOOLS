<?php
require('../sync/connection.php');
include("../sync/sync1.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Roles</title>
<link rel="stylesheet" href="../css/style.css" />
</head>
<body>
<div class="form"><b> 
<p><a href="../mod">Back</a> | <a href="add">Add Role</a> | <a href="../logout">Logout</a></b></p>
<h2>View Roles</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr><th><strong>RoleID</strong></th><th><strong>Rolename</strong></th><th><strong>Mod lvl</strong></th><th><strong>Edit</strong></th><th><strong>Delete</strong></th></tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from roles ORDER BY roleID desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $row ["roleID"]; ?></td><td align="center"><?php echo $row["roleName"]; ?></td><td align="center"><?php echo $row["modBadgeLevel"]; ?></td><td align="center"><a href="edit?roleID=<?php echo $row["roleID"]; ?>">Edit</a></td><td align="center"><a href="delete?roleID=<?php echo $row["roleID"]; ?>">Delete</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>

<table><th>
<a href="add">
<input type="button" value="Add"></a></th><th><a href="../roles"><input type="button" value="refresh"></a></th>
</table>
<br /><br /><br><br>
For More GDPS Fixer By: <a href="http://famry-amri.rf.gd/">FamryAmri</a>
</div>
</body>
</html>
