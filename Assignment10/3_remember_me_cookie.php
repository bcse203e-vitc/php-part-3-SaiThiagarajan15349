<?php
if(isset($_POST['remember'])) {
    setcookie('username', $_POST['username'], time()+3600*24);
}
echo "Welcome " . ($_COOKIE['username'] ?? 'Guest');
?>