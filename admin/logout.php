<?php
require('inc/essentials.php');

session_start();
session_destroy();

     header("location: index.php");
?>