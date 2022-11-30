<?php
$db_conn = mysqli_query("localhost", "s2217", "2217", "s2217_db");

$name = $_POST['name'];
$passwd = $_POST['passwd'];

// if ()

mysqli_close($db_conn);
?>