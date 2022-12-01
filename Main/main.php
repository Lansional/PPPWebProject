<html>
    <head>
        <link href="main.css" rel="stylesheet">
        <script>
            function openNav() 
            {
              document.getElementById("mySidenav").style.height = "170px";
            }
            
            function closeNav() 
            {
              document.getElementById("mySidenav").style.height = "0";
            }
  
        </script>
    </head>
    <body>
        <div id="mySidenav" class="main-top-bar">
            <div  class="main-under-benner1">
                    <a  href="javascript:void(0)" onclick="closeNav()">      
                        <div style="border: 2px solid black; border-radius: 1%; width: 1%; height: 1%;"></div>
                    </a>
                <iframe class="under-benner"></iframe>
                <div class="main-under-benner2">
                <iframe class="ads"></iframe>
                </div>
            </div>    
        </div>

        <a href="javascript:void(0)" onclick="openNav()"> 
            <div class="main-top-button"></div>
        </a>
            
        <div class="main-click">
            <div class="img"></div>
            <p align="middle">
                <iframe class="touch-score" src="plus.php" name="score"></iframe>
            </p>
            <a href="plus.php" target="score">
                <div class="nohomrim"></div>
            </a>
        </div>
            
    </body>
</html>