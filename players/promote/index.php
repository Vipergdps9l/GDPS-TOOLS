<?php
require('../../sync/conn.php');
include("../../sync/sync2.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Promoter</title>
<link rel="stylesheet" href="../../css/style.css" />
</head>
<body>
<div class="form"><b>
<p><a href="../../mod">Back</a> | <a href="../../roles/add">Add Role</a> | <a href="../../logout">Logout</a></b></p>
<h2>Promoter</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr><th><strong>No</strong></th><th><strong>RoleID</strong></th><th><strong>AccountID</strong></th><th><strong></strong></th><th><strong></strong></th></tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from roleassign ORDER BY assignID desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td><td align="center"><?php echo $row["roleID"]; ?></td><td align="center"><?php echo $row["accountID"]; ?></td><td align="center"><a href="dismote.php?assignID=<?php echo $row["assignID"]; ?>">Edit</a></td>
<td align="center"><a href="promote.php?assignID=<?php echo $row['assignID'];?>">Change RoleID</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>
<table><th>
<a href="../addassignid">
<input type="button" value="Add"></a></th><th><a href="../promote"><input type="button" value="refresh"></a></th>
</table>

<br /><br /><br><br>
For More GDPS Fixer By: <a href="http://famry-amri.rf.gd/">FamryAmri</a>
</div>
</body>
</html>
