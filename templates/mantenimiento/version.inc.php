<?php
$comando = 'git log -2';
$row = exec($comando,$output,$error);

while(list(,$row) = each($output)){
	echo "<br>".$row."\n";
}

if($error){
echo "Error : $error<BR>\n";
exit;
}

//echo $ver[2];
?>