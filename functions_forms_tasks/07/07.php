<?php
$postfile = __DIR__.DIRECTORY_SEPARATOR.'gallery.txt';
$posts = postsLoad($postFile);

if (!empty($_POST['nic']) && function validate()) {
  postSave($postFile);
  $posts=[
  	'nic' => $_POST['nic'],
	'msg' => $_POST['msg'],
	];
}

function validate() {
	if (empty($_POST['nic']) || empty($_POST['msg'])) {
		return false;
	}
}

function postSave($fileName){
	$message = [
	'nic' => $_POST['nic'],
	'msg' => $_POST['msg'],
	];
	$f = fopen($fileName, 'a');
	fwrite($f, serialize($msg).PHP_EOL);
	fclose($f);
}

function postsLoad($file){
	if(!is_file($file)){
		return [];
	}
	$res = [];
	$f = fopen($file, 'rb');
	while(!feof($f)){
		$row = fgets($f, 4*1024);
		$res[] = unserialize($row);
	}
	fclose($f);
	return $res;
}
?>

<html>
<head>
	<meta charset="UTF-8"/>
</head>
<body>
	<?php foreach($posts as $post) :?>
	<div>
		<strong><?=$post['nic']?></strong>
		<div><strong><?=$post['msg']?></strong></div>
	</div>
	<? endforeach; ?>
	
	<form action="" method="post">
		Nick: <input type="text" name="nic" value=""/><br/>
		Message: <textarea name="msg">
		<button type="submit">OK</button>
	</form>
</body>
</html>
