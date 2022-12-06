<?php
$id = $_POST['account'];
$passwd = $_POST['passwd'];

if (!$id) {
    echo "<script>alert('계정이름을 입력하세요')</script>";
    echo "<script>location.href='login.html';</script>";
}

if (!$passwd) {
    echo "<script>alert('비번을 입력하세요')</script>";
    echo "<script>location.href='login.html';</script>";
}

$passwd = md5($passwd);

include "../theServer.inc";
// echo "\$id: ".$id."<br>";
// echo "\$password: ".$passwd."<br>";

$result = mysqli_query($db_conn, "SELECT * FROM $forTable WHERE account='$id' && password='$passwd'");

if ($result) {
    session_start();
    
    $_SESSION['is_login'] = true;
    $_SESSION['id'] = $id;

    // echo "\$_SESSION: ".$_SESSION['id']."<br>";
    echo "<script>alert('안녕하세요 $id 님.')</script>";
    echo "<script>location.href='../Main/main.php';</script>";
} else {
    echo "<script>alert('계정이나 비번이 틀렸습니다.')</script>";
    echo "<script>location.href='login.html';</script>";
}

mysqli_close($db_conn);
?>
