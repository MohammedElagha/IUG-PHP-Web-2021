<?php

session_start();

session_unset();
session_destroy();

header("Location: http://localhost/Web2021Course/Lectures/21 - Authentication/Session/login.php");

?>