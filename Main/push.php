<?php
    include "../theServer.inc";

    session_start();

    $count = $_POST['hiddenScore'];
    $account = $_SESSION['id'];

    echo "\$count: $count <br>";
    echo "\$account: $account <br>";
    $result = mysqli_query($db_conn, "UPDATE $forTable SET count=$count WHERE account='$account'");
    mysqli_close($db_conn);
    echo "<script>alert('올렸습니다.')</script>";
    echo "<script>location.href='main.php';</script>";
?>