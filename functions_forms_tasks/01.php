<?php
  if ($_POST) {
  $point=array(',','.',' -',':',';','\'','"');
  $a=str_replace ($point, '', $_POST['t1']);
  $b=str_replace ($point, '', $_POST['t2']);
  }
getCommonWords($a, $b);
?>

<form action="" method="post">
    Text 1:  <input type="text" name="t1" /><br />
    Text 2: <input type="text" name="t2" /><br />
    <input type="submit" name="submit" value="OK" />
</form>

<?php 
function getCommonWords($a, $b){
  $result=array();

  echo $a.'<br/>'.$b.'<br/>';
  $a=array_unique(explode (' ', $a));
  $b=array_unique(explode (' ', $b));
  print_r($a);
  echo'<br/>';
  print_r($b);
  echo'<br/>';
  for($i=1;$i<=count($b);$i++){
    print_r($b[$i-1]);
    echo'<br/>';
    if(in_array($b[$i-1],$a)){
      array_push($result, $b[$i-1]);
    }
  }
  print_r($result);
}
?>