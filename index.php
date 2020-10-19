<?php
echo "aaa";
session_start();
require_once "./mvc/Bridge.php";
session_destroy();
?>
