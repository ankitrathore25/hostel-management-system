<?php
//change about 
$q5 = "SELECT abouthead FROM admin WHERE id=1";
$q51 = mysql_query($q5);
$disp = mysql_fetch_array($q51);
//echo $disp['abouthead'];

$q6 = "SELECT aboutinfo FROM admin WHERE id=1";
$q61 = mysql_query($q6);
$disp2 = mysql_fetch_array($q61);


?>
<h1 style="color:#000000"><b><u><center><?php echo $disp['abouthead']; ?></center></u></b></h1>

<h3><b>Our mission</b></h3>
<font size="+1"><?php echo $disp2['aboutinfo']; ?></font>
