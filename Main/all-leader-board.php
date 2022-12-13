<html>
<head>
    <link href="all-leader-board.css" rel="stylesheet">
    <meta http-equiv="refresh" content="5">
</head>
<body>
    <?php
    include "../theServer.inc";

    $result = mysqli_query($db_conn, "SELECT * FROM $forTable ORDER BY count DESC");
    $row = mysqli_fetch_array($result);
    ?>
    <a href="leader-reset.html" target="leaderboard" style=" text-decoration: none;">
    <div class="close">
        <p class="text1">⮈ 창 닫기</p>
    </div>
    </a>
    <div class="leader">
    
        <h1 class="text">전체 순위</h1>
    </div>
    <div class="all-leader">
        <div class="emogi">  
        <p class="main-ranking1">🥇</p>
        </div>
         <p class="name"><?=$row['account']?></p>
        <p class="score"><?=$row['count']?></p>
    </div>
    <?php
    $row = mysqli_fetch_array($result);
    ?>
    <div class="all-leader">
        <div class="emogi">  
        <p class="main-ranking1">🥈</p>
        </div>
         <p class="name"><?=$row['account']?></p>
        <p class="score"><?=$row['count']?></p>
    </div>
    <?php
    while ($row = mysqli_fetch_array($result)) {
    ?>
    <div class="all-leader">
        <!-- <div class="emogi">   -->
        <!-- <p class="main-ranking1">🥈</p> -->
        <!-- </div> -->
        <p class="name"><?=$row['account']?></p>
        <p class="score"><?=$row['count']?></p>
    </div>
    <?php
    }
    mysqli_close($db_conn);
    ?>
</body>
</html>
