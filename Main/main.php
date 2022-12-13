<!-- asdf -->
<html>
<head>
    <title>팝 팀 에픽</title>
    <?php
    include "../theServer.inc";
    ?>
    <link href="main.css" rel="stylesheet">
    <script>
        
        var check = false;
     
        </script>
</head>
<body oncontextmenu="return false" ondragstart="return false" onselectstart="return false">
    
    <iframe id="score" class="all-leader" name="leaderboard" ></iframe>
    
    <a href="../TheNotice/theNotice.php" onclick="check = true;" style="text-decoration: none; color: black;"><div class="menu1"><h3 style="margin-top: -0.1px; margin-left: 7px">①</h3><h3 style="text-align: center; margin-left: 10px; margin-top: -40px;">공지사항</h1></div></a>


    <?php
    session_start();

    if (!$_SESSION['is_login']) {
        $result = mysqli_query($db_conn, "SELECT * FROM $forTable ORDER BY count DESC");
        $row = mysqli_fetch_array($result);
    ?>
    <a href="../Login/login.html" onclick="check = true;" style="text-decoration: none; color: black;"><div class="menu2"><h3 style="margin-top: -0.1px; margin-left: 7px">②</h3><h3 style="text-align: center; margin-left: 10px; margin-top: -40px;">로그인</h1></div></a>
    <?php
    } else {
        ?>
        <script>check = true;</script>
        <a href="../Login/logout.php"  style="text-decoration: none; color: black;"><div class="menu2"><h3 style="margin-top: -0.1px; margin-left: 7px">②</h3><h3 style="text-align: center; margin-left: 10px; margin-top: -40px;">로그아웃</h1></div></a>
        <?php
    }
    ?>
    <a href="tel:https://popcat.click/" style="text-decoration: none; color: black;"><div class="menu3"><h3 style="margin-top: -0.1px; margin-left: 7px">③</h3><h3 style="text-align: center; margin-left: 10px; margin-top: -40px;">링크 공유</h1></div></a>
    <a href="../The이용약관/agree.php" style="text-decoration: none; color: black;"><div class="menu4"><h3 style="margin-top: -0.1px; margin-left: 7px">④</h3><h3 style="text-align: center; margin-left: 10px; margin-top: -40px;">이용약관</h1></div></a>



        <div id="mySidenav" class="main-top-bar">
            <div  class="main-under-benner1">
                <div class="main-under-benner2">
                    <iframe class="ads" src="롤adscopy.html"></iframe>
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
    
   
        
    <div class="main-click">
        <div class="img">
        </div>
        <?php
    if ($_SESSION['is_login']) 
    {
        $result = mysqli_query($db_conn, "SELECT * FROM $forTable WHERE account='".$_SESSION['id']."'");
        $row = mysqli_fetch_array($result);
        $count = $row['count'];
        ?>
        <form method="POST" action="push.php">
            <input id="submit" type="submit" value="올리기">
            <input id="hiddenScore" type="hidden" name="hiddenScore">;
            <div class="score_with_count">
                <h2><?= $_SESSION['id'] ?></h3>
                <h3 id="count"><?= $row['count'] ?></h3>
            </div>
        </form>
    <?php
    } 
    else {
    ?>
        <div id="nohomrim" class="score_with_count">
            <h2>로그인하세요</h2>
        </div>
    <?php
    }
    ?>
        <div href="plus.php">
            <div id="punch" class="nohomrim"></div>
        </div>
    </div>
    <script>
        document.addEventListener('dragstart drop', event => event.preventDefault());
        
        var punch = document.getElementById('punch');
        var count = document.getElementById('count');
        var tophp = document.getElementById('toPHP');
        var hiddenInput = document.getElementById('hiddenScore');

        var num = <?=$count?>;
        var str = 'push.php?count=';

        punch.addEventListener('click', function() {
            <?php $count++ ?>
            num++;
            count.innerText = num;
            hiddenInput.value = num;
        });
    </script>
    <?php
mysqli_close($db);
    ?>
</body>
</html>
