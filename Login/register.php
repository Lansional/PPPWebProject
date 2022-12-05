<?php
$account = $_POST['id'];
$passwd = $_POST['passwd'];
$passwd_check = $_POST['passwd_check'];

if (!$account) {
    echo "<script>alert('아이디를 입력하지 않았습니다.');</script>";
    echo "<script>location.href='joinmembership2.html';</script>";
}

$passwd = md5($passwd);
include "../theServer.inc";
$result = mysqli_query($db_conn, "INSERT INTO $forTable VALUES ('$account', '$passwd', 0)");

// debugging
// echo "\$passwd: ".$passwd."<br>";
// echo $account."<br>";
// echo "md5(\$passwd): ".$passwd."<br>";

if ($result) {
    session_start();

    $_SESSION['is_login'] = true;
    $_SESSION['id'] = $account;

    echo "<script>alert('가입완료');</script>";
    echo "<script>location.href='login.html';</script>";
} else {
    // echo "실패!";
    // echo "Error: ".mysql_error()."<br>";
    echo "<script>alert('똑같은 이름의 계정이 있습니다.');</script>";
    echo "<script>location.href='joinmembership2.html';</script>";
}

mysqli_close($db_conn);
?>