<?php
$arr = array(26, 17, 136, 12, 79, 15);
$result = 0;
$i = 0;

foreach ($arr as $item) {
  	$i = $item * $item;
	$result += $i;
 	 echo $result.'<br>';
}
echo $result;