<?php 
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: patientlogin.php");
}

include('includes/patientheader.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Login</title>
</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
        </body>
</html>