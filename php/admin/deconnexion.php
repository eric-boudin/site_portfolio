<?php
session_start();
session_destroy();
$_SESSION=array();
header("Location:admin.php");
exit();