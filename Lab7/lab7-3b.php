<!DOCTYPE html>
<html>
<head>
  <title>
    Lab 7-3b
  </title>
</head>
<body>
  <?php
  $arr=array("geeks","For","GEEks");
  //Another Method
  // $arr=array_flip($arr);
  //$arr=array_change_key_case($arr, CASE_UPPER);

  echo "Uppercase Array Elements: <br>";

  for ($i=0; $i<3;$i++) {
    $arr[$i]=strtoupper($arr[$i]);
    echo "<br>".$arr[$i];
  }
   ?>
</body>
</html>
