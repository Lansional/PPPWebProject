<!-- asdf -->
<html>
<head>
    <?php
    include "../theServer.inc";
    ?>
    <link href="main.css" rel="stylesheet">
    <script>
        // int i=1;
        // function openNav() 
        // {
        //     i++;
        //     if(i=2)
        //     {
        //     function openNav()
        //     {
        //     document.getElementById("mySidenav").style.height = "0";
        //     }
        //     i/2=i;
        //     }
        //     document.getElementById("mySidenav").style.height = "160px";
        // }
        

//         var hiddenBtn = document.getElementById('hiddenBtn');

// hiddenBtn.addEventListener('click', function openNav() {
//     var mySidenav = document.getElementById('mySidenav');

//     if (mySidenav.style.height == '160px') {
//         mySidenav.style.height = '0px';
//         mySidenav.style.visibility = 'hidden';
//     } else {
//         mySidenav.style.height = '160px';
//         mySidenav.style.visibility = 'visible';
//     }
// });
        </script>
</head>
<body>
    
    <iframe class="all-leader" name="leaderboard" ></iframe>
    
    <a href="../TheNotice/theNotice.php" style="text-decoration: none; color: black;"><div class="menu1"><h3 style="margin-top: -0.1px; margin-left: 7px">①</h3><h3 style="text-align: center; margin-left: 10px; margin-top: -40px;">공지사항</h1></div></a>
  
    <?php
    session_start();

    if (!$_SESSION['is_login']) {
    ?>
        <a href="../Login/login.html" style="text-decoration: none; color: black;"><div class="menu2"><h3 style="margin-top: -0.1px; margin-left: 7px">②</h3><h3 style="text-align: center; margin-left: 10px; margin-top: -40px;">로그인</h1></div></a>
        <?php
    } else {
        ?>
        <a href="../Login/logout.php"  style="text-decoration: none; color: black;"><div class="menu2"><h3 style="margin-top: -0.1px; margin-left: 7px">②</h3><h3 style="text-align: center; margin-left: 10px; margin-top: -40px;">로그아웃</h1></div></a>
        <?php
    }
    ?>
    <a href="tel:https://popcat.click/" style="text-decoration: none; color: black;"><div class="menu3"><h3 style="margin-top: -0.1px; margin-left: 7px">③</h3><h3 style="text-align: center; margin-left: 10px; margin-top: -40px;">링크 공유</h1></div></a>
    <a href="../The이용약관/agree.php" style="text-decoration: none; color: black;"><div class="menu4"><h3 style="margin-top: -0.1px; margin-left: 7px">④</h3><h3 style="text-align: center; margin-left: 10px; margin-top: -40px;">이용약관</h1></div></a>



        <div id="mySidenav" class="main-top-bar">
            <div  class="main-under-benner1">
                <div class="main-under-benner2">
                    <iframe class="ads" src="놇두ads.html"></iframe>
                </div>
                <a href="all-leader-board.php" target="leaderboard">
                    <div style="float: right; margin: -6px 30px; height: 0;">
                        <h1 style="color: black;">
                            ≡
                        </h1> 
                    </div>
                </a>
                <div id="leader" class="under-benner">
<?php
        $result = mysqli_query($db_conn, "SELECT * FROM $forTable ORDER BY count DESC");
        $row = mysqli_fetch_array($result);
?>
                <div class="main-leader">
                    <p class="main-ranking1">🏆</p>
                    <div class="main-ranking2">
                        <span><?= $row['account']; ?></span>
                        <!-- 클릭한 횟수 -->
                        <span class="showCount"><?= $row['count']; ?></span>
                    </div>
                </div>
                <?php
        $row = mysqli_fetch_array($result);
        ?>
                <br>
                <div class="main-leader">
                    <p class="main-ranking1">🥇</p>
                    <div class="main-ranking2">
                        <span><?= $row['account']; ?></span>
                        <!-- 클릭한 횟수 -->
                        <span class="showCount"><?= $row['count']; ?></span>
                    </div>
                </div>
                <?php
        $row = mysqli_fetch_array($result);
        ?>
                <br>
                <div class="main-leader">
                    <p class="main-ranking1">🥈</p>
                    <div class="main-ranking2">
                        <span><?= $row['account']; ?></span>
                        <!-- 클릭한 횟수 -->
                        <span class="showCount"><?= $row['count']; ?></span>
                    </div>
                </div>
<?php
        $row = mysqli_fetch_array($result);
?>
                <br>
                <div class="main-leader">
                    <p class="main-ranking1">🥉</p>
                    <div class="main-ranking2">
                        <span><?= $row['account']; ?></span>
                        <!-- 클릭한 횟수 -->
                        <span class="showCount"><?= $row['count']; ?></span>
                    </div>
                </div>
            </div>    
        </div>
    </div>
    
    <a href="javascript:void(0)" onclick="openNav()" style="text-decoration: none;">
        <div class="main-top-button" id="hiddenBtn">
            <h2 style="text-align: center; color: black; height: 0; margin-top:-7px;">
                =
            </h2> 
        </div>
    </a>
        
    <div class="main-click">
        <div class="img">
        </div>
<?php
    if ($_SESSION['is_login']) 
    {
        $result = mysqli_query($db_conn, "SELECT * FROM $forTable WHERE account='".$_SESSION['id']."'");
        $row = mysqli_fetch_array($result);
    ?>
        <div class="score_with_count">
            <h2><?= $_SESSION['id'] ?></h3>
            <h3><?= $row['count'] ?></h3>
        </div>
    <?php
    } 
    else 
    {
    ?>
        <div class="score_with_count">
            <h2>로그인하세요</h3>
            <h3></h3>
        </div>
    <?php
    }
    ?>
        <div href="plus.php">
            <div class="nohomrim"></div>
        </div>
    </div>
    <script>

    </script>
    <?php
mysqli_close($db);
    ?>
</body>
</html>
