<html>
<head>
	<title>Form</title>
</head>
<body>
	<form method='post' action=''>
		Chooze the dir: <input type='text' name='dir'> <br/>
		<input type='submit'>
	</form>
</body>
</html>

<?php
  $dir = __DIR__.DIRECTORY_SEPARATOR.$_POST['dir'];

if (!isset($_POST['dir']) || !is_dir($dir)){
    exit('Chooze the dir');
  }
  echo '<pre>';
  print_r(scandir($dir));
  echo '</pre>';
?>
