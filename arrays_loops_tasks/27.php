<?php

$rows=rand(1,9);
$cols=rand(1,9);
$colors = array('red','yellow','blue','gray','maroon','brown','green');
?>

<table>
	<?php for($r=1;$r<=$rows;$r++) :?>
	<tr>
		<?php for($c=1;$c<=$cols;$c++) :
			$color=array_rand($colors);
		?>
			<td bgcolor="<?= $colors[$color]?>"><?= rand(1,100)?></td>
		<?php endfor;?>
	</tr>
	<?php endfor;?>
</table>