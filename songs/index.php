<?php
require('../sync/connection.php');
include("../sync/sync1.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Songs</title>
<link rel="stylesheet" href="../css/style.css" />
</head>
<body>
<div class="form"><b>
<p><a href="../">Back</a> | <a href="insert.php">Song Add </a> | <a href="../logout">Logout</a></p>
<h2>View Songs</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr><th><strong>ID</strong></th><th><strong>Name</strong></th><th><strong>By</strong></th><th><strong>Size</strong></th><th><strong></strong></th></tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from songs ORDER BY ID desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $row['ID']; ?></td><td align="center"><?php echo $row["name"]; ?></td><td align="center"><?php echo $row["authorName"]; ?></td>
<td align="center"><?php echo $row["size"];?></td><td align="center"><a href="edit.php?ID=<?php echo $row["ID"]; ?>">Edit</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>
<table><th><a href="../songs"><input type="button" value="refresh"></a></th>
</table>
<br /><br /><br><br>
For More GDPS Fixer By: <a href="http://famry-amri.rf.gd/">FamryAmri</a>
</div>
</body>
</html>
