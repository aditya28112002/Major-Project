<?php

session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

header("Location: admin_login.php"); // Redirect to login page
exit();
?>
