<?php
session_start();

if (isset($_POST['login']))
{
    $_SESSION['username'] = $_POST['username'];
    header("Location: dashboard.php");
}
?>
<form method="POST">
    Username:
    <input type="text" name="username">
    <button type="submit" name="login">
        Login
    </button>
</form>
