<?php
    include "../theServer.inc";

    $count = $_GET['count'];
    $account = $_SESSION['id'];

    $result = mysqli_query($db_conn, "UPDATE $forTable SET count=$count WHERE account=$account");
    echo "\$count: ".$count;
?>