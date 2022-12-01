<?php
$db_conn = mysqli_connect("localhost", "s2217", "2217", "s2217_db") or die('연결실패');

$account = $_POST['id'];
$passwd = $_POST['passwd'];

$forTable = "clickgames";
$result = mysqli_query($db_conn, "INSERT INTO $forTable VALUES ('$account', '$passwd', 0)");

echo $account."<br>";
echo $passwd."<br>";

if ($result) {
    // echo "<script>alert('성공');</script>";
    echo "성공";
} else {
    // echo "<script>alert('실패');</script>";
    echo "실패";
}

mysqli_close($db_conn);
// echo("<script>location.href='login.html';</script>");
?>