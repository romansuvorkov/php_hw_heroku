<?php

session_start();
$_SESSION['user_name'] = $_POST['user_name'];
header('Location: http://localhost:8000/index.php');