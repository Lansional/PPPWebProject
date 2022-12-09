<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>

    <link rel="stylesheet" type="text/css" href="theNotice.css">
    <link rel="stylesheet" type="text/css" href="smaller.css">
    <link rel="stylesheet" type="text/css" href="smallerSideBar.css">
</head>

<body>
    <?php
    include "../theNotice.inc";

    session_start();
    ?>
    <div id="mySidenav" class="sidenav">
        <img class="logo" style="margin-left: 20px"><br><br><br><br>
        <a class="navID" href="#">게임정보</a>
        <a class="navID" href="#">게임정보</a>
        <a class="navID" href="#">게임정보</a>
        <a class="navID" href="#">게임정보</a>
        <a class="navID" href="#">게임정보</a>
    </div>
    <!-- 상단 바 -->
    <div class="theBar">
        <img class="logo">
        <ul class="theTagUL">
            <li class="theTagLI"><a class="LIlink" href="#">게임정보</a></li>
            <li class="theTagLI"><a class="LIlink" href="#">게임정보</a></li>
            <li class="theTagLI"><a class="LIlink" href="#">게임정보</a></li>
            <li class="theTagLI"><a class="LIlink" href="#">게임정보</a></li>
            <li class="theTagLI"><a class="LIlink" href="#">게임정보</a></li>
        </ul>
        <a style="float: right; color: black; text-decoration: none; " href="#">
            <div id="hiddenBtn">
                ≡
            </div>
        </a>
        <a style="color: black; text-decoration: none;" href="../Login/joinmembership.html">
            <?php
        if ($_SESSION['is_login']) {            // 로그인 됨
        ?>
            <a id="signUp" style="text-decoration: none; background-color: rgb(56, 61, 57);
    border: 1px solid rgb(56, 61, 57); color: white; " href="../Login/joinmembership.html">
                <div id="text">로그아웃</div>
            </a>
            <?php
        } else {
            ?>
            <a id="signUp" style="text-decoration: none; color: black" href="../Login/joinmembership.html">
                <div id="text">회원가입</div>
            </a>
            </a>
            <a id="link" href="../Login/login.html">
                <div class="login">로그인</div>
            </a>
        <?php
        }
        ?>
    </div>
    <div style="height: 110px;"></div>
    <div class="notice">
        <p class="noticeText">공지사항<span class="insideOfNoticeText">&#124; 개발자노트</span></h2>
    </div>
    <div class="grid" style="padding: 10px">
<?php
    $result = mysqli_query($db_conn, "SELECT * FROM $forTable");
    while ($row = mysqli_fetch_array($result)) {
        echo ("
        <div style='width: 320px; height: 120px'>
            <img src='Images/".$row['file']."' width='100%' height='170px''>
            <div style='color: rgba(12,94,154,255); font-size: 10pt'><strong>공지사항</strong></div>
            <a style='color: black; font-size: 25pt; text-align: center'>".$row['title']."</a>
        </div>
        ");
    }
?>
    </div>
    <?php
    mysqli_close($db_conn);
    ?>
    <script src="smallerSideBar.js"></script>
</body>

</html>