<?php
session_start();

unset($_SESSION['phone']); //removing one array_count_values

session_destroy(); 
 ?>
