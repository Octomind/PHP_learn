<?php

$rows=15;
$start=$rows+1;

while ($rows>0){
	for ($i=1;$i<=$start-$rows;$i++){
		echo 'xx';
	}
	echo '<br>';
	$rows--;
}