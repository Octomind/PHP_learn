<?php
$arr = array(2, 5, 9, 15, 0, 4);
$num = array();

foreach ($arr as $a) {
	if ($a>3 && $a<10){
		echo $a.'<br>';
	}
}