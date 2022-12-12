<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>서비스 이용약관</title>
    <?php
    include "../theNotice.inc";

    session_start();
    ?>

    <link rel="stylesheet" type="text/css" href="agree.css">
    <link rel="stylesheet" type="text/css" href="smaller.css">
    <link rel="stylesheet" type="text/css" href="smallerSideBar.css">

    <style>
        .main
        {
        padding: 0 3rem;
        width: 83.5%;
        height: 100%;
        margin: 10px auto;
        background-color: white;
        }
    </style>
</head>

<body>
    <div id="mySidenav" class="sidenav">
        <img class="logo" style="margin-left: 20px"  src="팝팀에틱.jpg"><br><br><br><br>
        <a class="navID" href="../Main/main.php">게임</a>
        <a class="navID" href="../TheNotice/theNotice.php">공지사항</a>
    </div>
    <!-- 상단 바 -->
    <div class="theBar">
        <img class="logo" src="팝팀에틱.jpg">
        <ul class="theTagUL">
            <li class="theTagLI"><a class="LIlink" href="../Main/main.php">게임</a></li>
            <li class="theTagLI"><a class="LIlink" href="../TheNotice/theNotice.php">공지사항</a></li>
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
        <p class="noticeText">서비스<span class="insideOfNoticeText">&#124; 이용약관</span></h2>
    </div>
   
    <div class="main">
        <h1>(POPTEAMEPIC)의 관한 자료</h1>
        팝팀에픽(POPTEAMEPIC)은 빠르고 안전한 게임 크롬 브라우저 프로그램입니다.<BR>
        <br>
        - 지원OS<BR>
        Windows 7 (32비트/64비트)<BR>
        Windows 8 (32비트/64비트)<BR>
        Windows 8.1 (32비트/64비트)<BR>
        Windows 10 (32비트/64비트)<BR>
        Adroid<BR>
        iOS<BR>
        macOS<BR>
        Linux<BR>
        <br>
        - 사용범위<BR>
        프리 - 개인/기업, 국내/국외<BR>
        <br>
        - 주요기능<BR>
        *속도<BR>
        모든 작업을 빠르게 수행하도록 설계되어 있습니다.<BR>
        바탕화면에서 빠르게 시작할 수 있고 웹페이지를 순식간에 로드할 수 있으며, 복잡한 웹 애플리케이션을 빛의 속도로 실행할 수 있습니다.<BR>

        *간편함<BR>
        크롬의 브라우저창은 간결하고 정돈되어 있으며 간단합니다.<BR>
        주소창에서 검색과 탐색을 동시에 수행하고, 빠르고 쉽게 원하는 대로 탭을 정렬할 수 있습니다.<BR>

        *보안<BR>
        기본적으로 제공되는 악성코드 및 피싱 방지 기능을 사용하고, 최신 보안 수정사항등을 자동으로 업데이트하여 더욱 안전하고 보호된 웹 환경을 유지하도록 설계되었습니다.<BR>

        *개인정보 보호<BR>
        온라인 상태에서 공유하는 정보를 보호하면서 개인정보를 관리할 수 있습니다.<BR>

        *맞춤 설정<BR>
        설정을 간단히 변경하고 Chrome 웹 스토어에서 앱, 확장 프로그램 및 테마를 추가할 수 있습니다.<BR>

        *로그인<BR>
        Chrome에 로그인하면 북마크, 기록 및 기타 설정을 모든 컴퓨터에서 사용할 수 있습니다.<BR>
        또한 즐겨찾는 Google 서비스에 자동으로 로그인할 수도 있습니다.<BR>


        팝팀에픽(POPTEAMEPIC)<BR>
        </div>
    <?php
    mysqli_close($db_conn);
    ?>
    <script src="smallerSideBar.js"></script>
</body>

</html>