<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>
    <?php
    include "../theNotice.inc";

    session_start();
    ?>

    <link rel="stylesheet" type="text/css" href="theNotice.css">
    <link rel="stylesheet" type="text/css" href="smaller.css">
    <link rel="stylesheet" type="text/css" href="smallerSideBar.css">
</head>

<body>
    <div id="mySidenav" class="sidenav">
        <img class="logo" style="margin-left: 20px"><br><br><br><br>
        <a class="navID" href="../Main/main.php">게임</a>
        <a class="navID" href="../The이용약관/agree.php">이용약관</a>
    </div>
    <!-- 상단 바 -->
    <div class="theBar">
        <img class="logo">
        <ul class="theTagUL">
            <li class="theTagLI"><a class="LIlink" href="../Main/main.php">게임</a></li>
            <li class="theTagLI"><a class="LIlink" href="../The이용약관/agree.php">이용약관</a></li>
        </ul>
        <a style="float: right; color: black; text-decoration: none; " href="#">
            <div id="hiddenBtn">
                ≡
            </div>
        </a>
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
        <a id="signUp" style="text-decoration: none; color: black; margin-right: 30px" href="../Login/joinmembership.html">
            <div id="text">회원가입</div>
        </a>
        <a id="signUp" style="text-decoration: none; background-color: rgb(56, 61, 57);
border: 1px solid rgb(56, 61, 57); color: white; margin-right: 10px" href="../Login/login.html">
            <div id="text">로그인</div>
        </a>
    <?php
    }
    ?>
    </div>
    <div style="height: 110px;"></div>
    <div class="notice">
        <p class="noticeText">공지사항<span class="insideOfNoticeText">&#124; 개발자노트</span></h2>
    </div>
    <div class="grid">
<?php
    $result = mysqli_query($db_conn, "SELECT * FROM $fortable");
    while ($row = mysqli_fetch_array($result)) {
?>
        <a href="theContent.php?id=<?=$row['id']?>" class="gridOfOne">
            <div class="grid_img" 
                style="background-image: url('Images/<?=$row['file']?>');
                        background-size: cover"></div>
            <div class="smallText"><strong>공지사항</strong></div>
            <div class="title"><?=$row['title']?></div>
        </a>
<?php
    }
?>
    </div>
    <?php
    mysqli_close($db_conn);
    ?>
    <script src="smallerSideBar.js"></script>
</body>

</html>