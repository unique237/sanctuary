<?php

    require "connection.php";

    //session_start();


    //display the predications
    $query321 = "SELECT * FROM predication ORDER BY publish_date DESC LIMIT 3";
    $result321 = $pdo->query($query321);

?>