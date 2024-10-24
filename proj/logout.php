<?php
session_start();
session_destroy(); // Destroy the session
header("Location: vlera.html"); // Redirect to login page
exit();

?>
