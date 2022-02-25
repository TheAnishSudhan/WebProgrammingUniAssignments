<!DOCTYPE html>
<html>
<head>
  <title>
    Lab 7-2
  </title>
</head>
<body>
  <?php
  function factorialTable($number)
  {
    for ($i=1; $i<=10 ; $i++) {
      echo $number."*".$i."=".$number*$i."<br>";
    }
  }
  factorialTable(2);
   ?>
</body>
</html>
