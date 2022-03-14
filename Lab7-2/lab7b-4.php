<?php
session_start();
echo "Session started";
$_SESSION['count']++;

echo "<br>Views: ".$_SESSION['count'];
 ?>
