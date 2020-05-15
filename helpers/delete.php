
<?php

session_start();

$conn = mysqli_connect('localhost', 'root', '');

mysqli_select_db($conn, 'joblister');

$id = $_SESSION['id'];

echo $id;

$query = "DELETE FROM jobs WHERE id = '$id' ";

$results = mysqli_query($conn, $query) or die(mysqli_error($conn));

header("Location: ../index.php");
exit();

?>