<?php
if(isset($_POST['num'])){
	$number=intval($_POST['num']);
	$number=(string)$number;
	$sum=0;
	$i=0;
	while(isset($number[$i])){
		$sum+=$number[$i] !='.'? $number[$i]:0;
		$i++;
	}
}
?>

<html>
<body>
	<form>
		<label>Your nuber</label>;
		<input type="number" name="num" step="0.01" value="<?= isset($_POST['num']) ? $_POST['num'] : ''?>"/><br>
		<input type="submit" value="OK"/><br>
	</form>
	<?php if(isset($sum)) :?>
		<div>Summ: <?=$summ;?></div>
	<?php endif;?>
</body>
</html>