<?php
// logout.php - Logout
session_start();
session_destroy();
header("Location: index.html");
exit;
?>