<?php
// Start the session
session_start();

// Destroy the session data
session_unset();
session_destroy();

// Redirect to the index page
header("Location: ../index.php");
exit();
?>
