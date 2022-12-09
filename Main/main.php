<html>
<head>
    <link href="main.css" rel="stylesheet">
    <script>
        function openNav() 
        {
            document.getElementById("mySidenav").style.height = "160px";
        }
        function closeNav()
        {
            document.getElementById("mySidenav").style.height = "0";
        }
        </script>
</head>
<body>
    <iframe class="all-leader" name="leaderboard" ></iframe>
    
    <a href="../TheNotice/theNotice.php" style="text-decoration: none; color: black;"><div class="menu1"><h3 style="margin-top: -0.1px; margin-left: 7px">➀</h3><h3 style="text-align: center; margin-left: 10px; margin-top: -40px;">공지사항</h1></div></a>
    <?php
    include "../theServer.inc";
    session_start();

    if (!$_SESSION['is_login']) {
        ?>
        <a href="../Login/login.html" style="text-decoration: none; color: black;"><div class="menu2"><h3 style="margin-top: -0.1px; margin-left: 7px">➁</h3><h3 style="text-align: center; margin-left: 10px; margin-top: -40px;">로그인</h1></div></a>
        <?php
    } else {
        ?>
        <a href="../Login/logout.php" style="text-decoration: none; color: black;"><div class="menu2"><h3 style="margin-top: -0.1px; margin-left: 7px">➁</h3><h3 style="text-align: center; margin-left: 10px; margin-top: -40px;">로그아웃</h1></div></a>
        <?php
    }
    ?>
        
        <a href="tel:https://popcat.click/" style="text-decoration: none; color: black;"><div class="menu3"><h3 style="margin-top: -0.1px; margin-left: 7px">③</h3><h3 style="text-align: center; margin-left: 10px; margin-top: -40px;">링크 공유</h1></div></a>
        <div id="mySidenav" class="main-top-bar">
            <div  class="main-under-benner1">
                <div class="main-under-benner2">
                    <iframe class="ads" src="놇두ads.html"></iframe>
                </div>
                <a href="#" target="">
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
                        <?php echo $row['account']; ?>
                    </div>
                    <!-- 클릭한 횟수 -->
                    <div class="showCount">     
                        <?php echo $row['count']; ?>
                    </div>
                </div>
<?php
        $row = mysqli_fetch_array($result);
?>
                <br>
                <div class="main-leader">
                    <p class="main-ranking1">🥇</p>
                    <div class="main-ranking2">
                        <?php echo $row['account']; ?>
                    </div>
                </div>
<?php
        $row = mysqli_fetch_array($result);
?>
                <br>
                <div class="main-leader">
                    <p class="main-ranking1">🥈</p>
                    <div class="main-ranking2">
                        <?php echo $row['account']; ?>
                    </div>
                    <div class="showCount">
                        <?php echo $row['count']; ?>
                    </div>
                </div>
                <br>
<?php
        $row = mysqli_fetch_array($result);
?>
                <div class="main-leader">
                    <p class="main-ranking1">🥉</p>
                    <div class="main-ranking2">
                        <?php echo $row['account']; ?>
                    </div>
                </div>
            </div>    
        </div>
    </div>

    <a href="javascript:void(0)" onclick="openNav()" style="text-decoration: none;"> 
        <div class="main-top-button">
            <h2 style="text-align: center; margin-top: -6px; color: black; height: 0;">
                =
            </h2> 
        </div>
    </a>
        
    <div class="main-click">
        <div class="img">
        <?php
    if (!$_SESSION['is_login']) {
        ?>
        <h1 style="color: black; text-align: center; display: grid;
        place-items: center;
        min-height: 10vh;">이름을 적어주십쇼!</h1>
        <?php
    } else {
        ?>
        <h1 style="color: black; text-align: center; display: grid;
        place-items: center;
        min-height: 10vh;"><?php echo $_SESSION['id'] ?></h1>
        <?php
    }
    ?>
        </div>
        <p align="middle">
<?php
    if ($_SESSION['is_login']) {
        $result = mysqli_query($db_conn, "SELECT * FROM $forTable WHERE account='$account'");
        $row = mysqli_fetch_array($result);
        echo $row['count'];
    }
?>
            <iframe class="touch-score" src="plus.php" name="score"></iframe>
        </p>
        <a href="plus.php" target="score">
            <div class="nohomrim"></div>
        </a>
    </div>
    <!-- <a  href="javascript:void(0)" onclick="closeNav()">      
        <div style="border: 2px solid black; border-radius: 1%; width: 1%; height: 1%;"></div>
    </a>  -->
    <?php
mysqli_close($db);
    ?>
</body>
</html>