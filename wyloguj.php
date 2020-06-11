<?php
session_start();
unset($_SESSION['zalogowany']);
unset($_SESSION['idus']);
header('location: index.php');

?>