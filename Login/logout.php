<?php
session_start();
session_destroy();

echo "<script>alert('로그아웃 하였습니다.');</script>";
echo "<script>location.href='../Main/main.php';</script>";
?>