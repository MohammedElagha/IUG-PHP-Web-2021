<?php

/// logout

setcookie('is_login', true, 0);

header("Location: http://localhost/Web2021Course/Lectures/21 - Authentication/Cookie/login.php");

?>