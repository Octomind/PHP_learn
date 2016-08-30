<?php
  if ($_POST) {
  $point=array(',','.',' -',':',';','\'','"');
  $a=str_replace ($point, '', $_POST['t1']);
  }
getCommonWords($a);
?>

<form action="" method="post">
    Text 1:  <input type="text" name="t1" /><br />
    <input type="submit" name="submit" value="OK" />
</form>

<?php 
function getCommonWords($a){
  $result=array();

  echo $a.'<br/>';
  $b=array_unique(explode (' ', $a));
  print_r($b);
  echo'<br/>';
  for($i=1;$i<=count($b);$i++){
    print_r($b[$i-1]);
    echo'<br/>';
    if(str_replace($b[$i-1], "", $a, $count)>1){
      array_push($result, $b[$i-1]);
    }
  }
  print_r($result);
}
?>