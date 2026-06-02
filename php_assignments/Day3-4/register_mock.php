<form method="POST">

<input type="text" name="name"  placeholder="Name">
<br><br>

<input type="email" name="email" placeholder="email">
<br><br>

<input type="text" name="role" placeholder="role">
<br><br>

<button type="submit">Register</button>

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['role'])) {

        echo "all fields must be filled";

    } else {

        echo "Registered Successfully";
    }
}
?>
