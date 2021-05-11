<?php

if (isset($_COOKIE['is_login']) && $_COOKIE['is_login']) {

} else {
	header("Location: http://localhost/Web2021Course/Lectures/21 - Authentication/Cookie/login.php");
}

?>