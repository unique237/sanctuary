<?php

    require "connection.php";

    //session_start();


    //display the predications
    $query123 = "SELECT * FROM media ORDER BY publish_date DESC LIMIT 6";
    $result123 = $pdo->query($query123);

    //all
    $query422 = "SELECT * FROM media ORDER BY publish_date DESC";
    $result422 = $pdo->query($query422);

?>