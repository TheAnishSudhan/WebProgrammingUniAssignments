<!DOCTYPE html>
<html>
<head>
  <title>
    Lab 7-5
  </title>
</head>
<body>
  <?php
  function defaultArgumentTest($value="default"){
    if ($value=="default") {
      echo "The passede value is the default value: ".$value;
      // code...
    }
    else {
      echo "The passed value is (not the default value): ".$value;
    }
  }
  defaultArgumentTest("anish");
  echo "<br>";
  defaultArgumentTest();
  ?>
</body>
</html>
