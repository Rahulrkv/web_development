<?php
session_start();
session_unset();
session_destroy();
define('TITLE','logout');

header('location: ../admin/login.php');







 ?>
