<?php
session_start();
if($_POST['user']=="admin" && $_POST['pass']=="1234") {
    $_SESSION['user'] = "admin";
    header("Location: welcome.php");
} else {
    echo "Invalid credentials.";
}
?>