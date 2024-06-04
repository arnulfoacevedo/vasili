<?php
$balance = $_REQUEST["balance"];
$entry=$_REQUEST["entry"];
$liq=$_REQUEST["liq"];
$position=$_REQUEST["position"];
/*echo "Balance:".$balance;
echo "<br />";
echo "Entry:".$entry;
echo "<br />";
echo "Liq:".$liq;
echo "<br />";*/
if ($position=="LONG") {
	$margin = (1 / ((-1*((($liq /$entry) / 1.010101) - 1)) / $balance));
} elseif ($position=="SHORT") {
	$margin = 1 / ((-1*((($entry / $liq) / 1.010101) - 1)) / $balance) - ($balance * 1);
}
//echo $margin - $balance;
echo $margin;


//liq = ((1 - (balance / (margin - balance))) * 1.01) * entry
//1 - balance / (margin-balance)
?>