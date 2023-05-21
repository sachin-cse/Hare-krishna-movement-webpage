<?php
session_start();

// Clear all session variables
$_SESSION = array();

// Destroy the session
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        function logoutConfirmation() {
            var response = confirm('Are you sure you want to log out?');
            if (response) {
                window.location.href = "../index.php";
            } else {
                window.location.href = "../dashboard.php";
            }
        }
    </script>
</head>
<body onload="logoutConfirmation();">
</body>
</html>
