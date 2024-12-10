<?php

    require "connection.php";

    session_start();

    //the queries to display the weekly WHERE category = ''

    //the weekly WHERE category = '' are by category 

    //Cultes Prophétique
    $wkly_q1 = "SELECT * FROM weekly WHERE category = 'Cultes Prophétique' ORDER BY weekly_id DESC LIMIT 3";
    $wkly_r1 = $pdo->query($wkly_q1);

    //Nuits de Prodiges
    $wkly_q2 = "SELECT * FROM weekly WHERE category = 'Nuits de Prodiges' ORDER BY weekly_id DESC LIMIT 3";
    $wkly_r2 = $pdo->query($wkly_q2);

    //Prières de Miséricordes
    $wkly_q3 = "SELECT * FROM weekly WHERE category = 'Prières de Miséricordes' ORDER BY weekly_id DESC LIMIT 3";
    $wkly_r3 = $pdo->query($wkly_q3);

    //Programmes Spéciaux
    $wkly_q4 = "SELECT * FROM weekly WHERE category = 'Programmes Spéciaux' ORDER BY weekly_id DESC LIMIT 3";
    $wkly_r4 = $pdo->query($wkly_q4);


?>