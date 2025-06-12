<?php
session_start();

// Destroy session to log out
session_unset();
session_destroy();

// Redirect to homepage or login page
header("Location: index.php");
exit;
?>
