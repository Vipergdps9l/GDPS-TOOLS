<?php
require('../sync/connection.php');
include("../sync/sync1.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Levels</title>
<link rel="stylesheet" href="../css/style.css" />
</head>
<body>
<div class="form"><b> 
<p><a href="../">Back</a> | <a href="../logout">Logout</a></b></p>
<h2>View Levels</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr><th><strong>ID</strong></th><th><strong>Name</strong></th><th><strong>Pass</strong></th><th><b>Orginal Level</b> </th><th><strong>Edit</strong></th><th><strong>Delete</strong></th></tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from levels ORDER BY levelID desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $row ["levelID"]; ?></td><td align="center"><?php echo $row["levelName"]; ?></td><td align="center"><?php echo $row["password"]; ?></td>
<td align="center"><?php echo $row['original']?></td><td align="center"><a href="edit?levelID=<?php echo $row["levelID"]; ?>">Edit</a></td><td align="center"><a href="delete?levelID=<?php echo $row["levelID"]; ?>">Delete</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>

<table><th>
<a href="add">
<input type="button" value="Add"></a></th><th><a href="../level"><input type="button" value="refresh"></a></th>
</table>
<br /><br /><br><br>
For More GDPS Fixer By: <a href="http://famry-amri.rf.gd/">FamryAmri</a>
</div>
</body>
</html>
