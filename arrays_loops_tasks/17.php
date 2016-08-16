<?php

$mon=['jav','feb','mar','apr','may','jun','jul','aug','sep','oct','nov','dec'];
$month=date('n')-1;

foreach ($mon as $k=>$v){
	echo $k == $month ? "<b>$v</b><br>" : "$v<br>";
}