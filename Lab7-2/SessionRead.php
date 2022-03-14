<?php
session_start();

if (isset($_SESSION['username'])) {
  echo 'Name is '.$_SESSION['username']."<br>";
  echo 'Phone is '.$_SESSION['phone']."<br>";
} else {
  echo 'No user found...';
}
 ?>
