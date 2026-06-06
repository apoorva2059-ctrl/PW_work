<?php
$dataset = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dataset = [
        "Name" => $_POST['name'],
        "Email" => $_POST['email'],
        "Role" => $_POST['role']
    ];
}

?>
<form method="POST">
    Name:
    <input type="text" name="name">
    <br>
     Email:
    <input type="email" name="email">
    <br>
     Role:
    <input type="text" name="role">
    <br>
    <button type="submit">
        Register
    </button>
</form>

<?php
if (!empty($dataset)) {
?>

<table border=1>
<tr>
    <th>Field</th>
    <th>Value</th>
</tr>

<?php
foreach ($dataset as $key => $value) {
?>

<tr>
    <td><?php echo $key; ?></td>
    <td><?php echo $value; ?></td>
</tr>

<?php
}
?>

</table>

<?php
}
?>
