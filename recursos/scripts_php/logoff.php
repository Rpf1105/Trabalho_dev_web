<?php
session_start(); 
session_destroy();
header("Location: http://localhost/Trabalho_dev_web/index.php");
?>