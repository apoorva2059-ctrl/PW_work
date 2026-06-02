<form method="POST">
    
    <input type="text" name="name">
    <button type="submit">Submit</button>
</form>

<?php
if(isset($_POST['name'])) {

    echo "Welcome ".$_POST['name'];
}
?>
