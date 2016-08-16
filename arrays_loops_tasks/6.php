<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = array();
$ru = array();

foreach ($arr as $k => $v) {
 	array_push($en,$k);
}
echo implode(', ', $en).'<br>';
foreach ($arr as $k => $v) {
	array_push($ru,$v);
}
echo implode(', ', $ru).'<br>';