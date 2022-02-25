<!DOCTYPE html>
<html>
<head>
  <title>
    Lab 7-3a
  </title>
</head>
<body>
  <?php
  header('Content-Type:text/plain'); //For browser to read the /t and /n as intended

  $arr1=array(1,2);
  $arr2=array(3,4);
  $arr1=array_merge($arr1,$arr2);
  echo "Array 1 elements: ";
  foreach ($arr1 as $arrayElement) {
    echo $arrayElement."\t";
  }
  ?>
</body>
</html>
