<?php
include "../../sync/conn.php";
 
 $A = $_POST['A'];
 $B = $_POST['B'];
 $C = $_POST['C'];
 $D = $_POST['D'];
 $E = $_POST['E'];
 $F = $_POST['F'];
 $G = $_POST['G'];
 $H = $_POST['H'];
 $I = $_POST['I'];
 $J = $_POST['J'];
 $K = $_POST['K'];
 $L = $_POST['L'];
 $M = $_POST['M'];
 $N = $_POST['N'];
 $O = $_POST['O'];
 $P = $_POST['P'];
 $Q = $_POST['Q'];
 $R = $_POST['R'];
 $S = $_POST['S'];
 $T = $_POST['T'];
 $U = $_POST['U'];
 $V = $_POST['V'];
 $W = $_POST['W'];
 $X = $_POST['X'];
 $Y = $_POST['Y'];
 $Z = $_POST['Z'];
 $AA = $_POST['AA'];
 $AB = $_POST['AB'];
 $AC = $_POST['AC'];
 $AD = $_POST['AD'];
 $AE = $_POST['AE'];
 $AF = $_POST['AF'];
 $AG = $_POST['AG'];
 $AH = $_POST['AH'];

 $sql = "INSERT INTO `roles`(`roleName`, `commandRate`, `commandFeature`, `commandEpic`, `commandUnepic`, `commandVerifycoins`, `commandDaily`, `commandWeekly`, `commandDelete`, `commandSetacc`, `commandRenameOwn`, `commandRenameAll`, `commandPassOwn`, `commandPassAll`, `commandDescriptionOwn`, `commandDescriptionAll`, `commandPublicOwn`, `commandPublicAll`, `commandUnlistOwn`, `commandUnlistAll`, `commandSharecpOwn`, `commandSharecpAll`, `commandSongOwn`, `commandSongAll`, `actionRateDemon`, `actionRateStars`, `actionRateDifficulty`, `actionRequestMod`, `toolLeaderboardsban`, `toolPackcreate`, `toolModactions`, `dashboardModTools`, `commentColor`, `modBadgeLevel`) VALUES ('$A','$B', '$C', '$D', '$E', '$F', '$G', '$H', '$I', '$J', '$K', '$L', '$M', '$N', '$O', '$P', '$Q', '$R', '$S', '$T', '$U', '$V', '$W', '$X', '$Y', '$Z', '$AA', '$AB', '$AC', '$AD', '$AE', '$AF', '$AG', '$AH');";
 mysqli_query($con, $sql);
header ("Location: ../");
 
 ?>