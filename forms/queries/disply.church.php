<?php

    require "../connection.php";
    session_start();

    //display all the churches 

    $church_national = "SELECT * FROM church WHERE country = 'Cameroun' ORDER BY church_id DESC";
    $national_result = $pdo->query($church_national);


?>