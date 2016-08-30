<?php
if (!empty($_POST['cnt']) && validate($_POST['cnt'])) {
  $text = file_get_contents('text.txt', 'rb');
  cut_text($text, $_POST['cnt']);
  echo $text;
}
getCommonWords($a, $b);
?>

<html>
<head>
	<meta charset="UTF-8"/>
</head>
<body>
	<form action="" method="post">
		Chars count: <input type="number" name="cnt" value="<?= isset($_POST['cnt']) ? $_POST['cnt'] : ' ' ?>"/><br/>
		<button type="submit">Send</button>
	</form>
</body>
</html>

<?php
function validate($value) {
	if(!is_numeric($value) || strpos($value, '.') !== false || strpos($value, ',') !== false) {
		return false;
	}
	return true;
}

function cut_tex(&$text, $cnt){
	/* $text = preg_replace('/[a-z]{'.$cnt.'}<:?=\a>/i', '$1*$2', $text); */
	$arr = preg_split('/\s|\W/', $text);
	$arr = array_filter($arr, function ($a) use($cnt) {
		return mb_strlen($a) < $cnt;
		
	});
	$text = implode(' ', $arr);
}
?>