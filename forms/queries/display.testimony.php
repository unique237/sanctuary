<?php

    require "connection.php";

    //session_start();


    //display the predications
    $query123 = "SELECT * FROM testimony ORDER BY testimony_id DESC";
    $result123 = $pdo->query($query123);

?>