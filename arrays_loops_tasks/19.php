<?php

$week=['Mon','Tue','Wen','Thu','Fri','Sat','Sun'];
$day=date('N')-1;

foreach ($week as $k=>$d){
	echo $k == $day ? "<em>$d</em><br>" : "$d<br>";
}