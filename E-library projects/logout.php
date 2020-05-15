<?php
session_start();
unset($_SESSION["AID"]);
unset($_SESSION["ID"]);
SESSION_destroy();
header("location:alogin.php");



?>