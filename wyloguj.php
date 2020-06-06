<?php
session_start();
unset($_SESSION['zalogowany']);
header('location: index.php');

?>