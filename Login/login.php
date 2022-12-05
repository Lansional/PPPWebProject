<?php
$id = $_POST['account'];
$passwd = md5($_POST['passwd']);

include "../theServer.inc";

// echo "\$id: ".$id."<br>";
// echo "\$password: ".$passwd."<br>";

$result = mysqli_query($db_conn, "SELECT * FROM $forTable WHERE account='$id' && password='$passwd'");

if ($result) {
    session_start();
    
    $_SESSION['is_login'] = true;
    $_SESSION['id'] = $id;

    echo "<script>alert('안녕하세요 $id 님.')</script>";
    echo "<script>location.href='../Main/main.html';</script>";
} else {
    echo "<script>alert('계정이나 비번이 틀렸습니다.')</script>";
    echo "<script>location.href='login.html';</script>";
}

mysqli_close($db_conn);
?>
