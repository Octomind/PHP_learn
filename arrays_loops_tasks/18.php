<?php

$week=['Mon','Tue','Wen','Thu','Fri','Sat','Sun'];

foreach ($week as $k=>$d){
	if($k==5||$k==6){
	echo "<b>$d</b><br>";
	}
	else {
		echo "$d<br>";
	}
}