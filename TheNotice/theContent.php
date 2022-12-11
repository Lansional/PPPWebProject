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

    <link rel="stylesheet" type="text/css" href="theContent.css">
    <link rel="stylesheet" type="text/css" href="smaller.css">
    <link rel="stylesheet" type="text/css" href="smallerSideBar.css">
</head>

<body>
    <div id="mySidenav" class="sidenav">
        <img class="logo1"  style="margin-left: 20px" src="fuck-you.jpg">
        <img class="logo"  src="팝팀에픽.jpg">
        <img class="logo2"  src="fuck-you.jpg"><br><br><br><br>
        <a class="navID" href="../Main/main.php">게임</a>
        <a class="navID" href="../The이용약관/agree.php">이용약관</a>
    </div>
    <!-- 상단 바 -->
    <div class="theBar">
        <img class="logo1" src="fuck-you.jpg">
        <img class="logo" src="팝팀에픽.jpg">
        <img class="logo2" src="fuck-you.jpg">
        <ul class="theTagUL">
        <li class="theTagLI"><a class="LIlink" href="../Main/main.php">게임</a></li>
            <li class="theTagLI"  style="margin-left: 20px"><a class="LIlink" href="../The이용약관/agree.php">이용약관</a></li>
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

    $id = $_GET['id'];
    $result = mysqli_query($db_conn, "SELECT * FROM $fortable WHERE id=$id");
    $row = mysqli_fetch_array($result);
    ?>
    </div>
    <div style="height: 110px;"></div>
    <div class="notice" style="
        background-image: url('Images/<?=$row['file']?>');
        background-size: cover;
        ">
    </div>
    <h1 class="title"><?=$row['title']?></h1>
    <br>
    <h3 style="margin-left: 60px">시간: <?=$row['time']?></h3>
    <p class="content"><?=$row['content']?></p>
    <br>
    <?php
    mysqli_close($db_conn);
    ?>
    <script src="smallerSideBar.js"></script>
</body>

</html>