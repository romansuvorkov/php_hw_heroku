<?php

session_start();
$_SESSION['user_name'] = $_POST['user_name'];
header('Location: https://sheltered-mountain-81196.herokuapp.com/index.php');