<html>

<head>
    <link href="main.css" rel="stylesheet">
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.height = "160px";
        }
        function closeNav() {
            document.getElementById("mySidenav").style.height = "0";
        }
    </script>
</head>

<body>
    <iframe style="width: 20vw; height: 100%; float: left; position: fixed; border: 0px;" name="leaderboard"></iframe>
    <div id="mySidenav" class="main-top-bar">
        <div class="main-under-benner1">
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
                <div class="main-leader">
                    <p class="main-ranking1">🏆</p>
                    <div class="main-ranking2"></div>
                </div>
                <br>
                <div class="main-leader">
                    <p class="main-ranking1">🥇</p>
                    <div class="main-ranking2"></div>
                </div>
                <br>
                <div class="main-leader">
                    <p class="main-ranking1">🥈</p>

                    <div class="main-ranking2"></div>

                </div>
                <br>
                <div class="main-leader">
                    <p class="main-ranking1">🥉</p>
                    <div class="main-ranking2"></div>
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
            <!-- <h1 style="color: black; text-align: center; display: grid;
                place-items: center;
                min-height: 10vh;">이름을 적어주십쇼!</h1> -->
        </div>
        <p align="middle">
            <iframe class="touch-score" src="plus.php" name="score"></iframe>
        </p>
        <a href="plus.php" target="score">
            <div class="nohomrim"></div>
        </a>
    </div>
    <!-- <a  href="javascript:void(0)" onclick="closeNav()">      
            <div style="border: 2px solid black; border-radius: 1%; width: 1%; height: 1%;"></div>
        </a>  -->

</body>

</html>