<?php
$db_conn = mysqli_connect("localhost", "s2217", "2217", "s2217_db") or die;

$account = $_POST['id'];
$passwd = $_POST['passwd'];

$forTable = "clickgames";
$result = mysqli_query("INSERT INTO $forTable VALUES ($id, $passwd, 0)");

if ($result)
    echo "<script>alert('성공');</script>";
else
    echo "<script>alert('실패');</script>";

mysqli_close($db_conn);
echo("<script>location.href='login.html';</script>");
?>