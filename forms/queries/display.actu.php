<?php

    require "connection.php";

    session_start();

    //the queries to display the last information

    //all
    //in the articles page
    $all_art = "SELECT * FROM article ORDER BY publish_date DESC";
    $result_all_art = $pdo->query($all_art);
    //$stmt = $pdo->query($short_art);

    //short
    //in the index page
    $short_art = "SELECT * FROM article ORDER BY publish_date DESC LIMIT 3";
    $result_short_art = $pdo->query($short_art);

    //articles by type

    //we already have the all
    //the actu
    $actu_art = "SELECT * FROM article where category = 'Actualités' ORDER BY publish_date DESC";
    $result_actu_art = $pdo->query($actu_art);

    //Evénements
    $event_art = "SELECT * FROM article where category = 'Evénements' ORDER BY publish_date DESC";
    $result_event_art = $pdo->query($event_art);

    //Croisades
    $crus_art = "SELECT * FROM article where category = 'Croisades' ORDER BY publish_date DESC";
    $result_crus_art = $pdo->query($crus_art);

    //Prophéties et leurs réalisations
    $proph_art = "SELECT * FROM article where category = 'Prophéties et leurs réalisations' ORDER BY publish_date DESC";
    $result_proph_art = $pdo->query($proph_art);

    //================== Prophéties et leurs réalisations Short just in case==========================//
    $proph_art_s = "SELECT * FROM article where category = 'Prophéties et leurs réalisations' ORDER BY publish_date DESC LIMIT 3";
    $result_proph_art_s = $pdo->query($proph_art_s);

    //Conférences apostoliques
    $conf_art = "SELECT * FROM article where category = 'Conférences apostoliques' ORDER BY publish_date DESC";
    $result_conf_art = $pdo->query($conf_art);



    // article details

    


?>