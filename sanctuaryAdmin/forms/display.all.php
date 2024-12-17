<?php
    require "conn.php"; // Database connection
    

        //display all articles 
    $sql = "SELECT * FROM article ORDER BY articleid DESC";
    $result = $pdo->query($sql);


        //display all predication
    $sql111 = "SELECT * FROM predication ORDER BY id DESC";
    $result111 = $pdo->query($sql111);

        //display all media
    $sql112 = "SELECT * FROM media ORDER BY id DESC";
    $result112 = $pdo->query($sql112);

        //display all churches
    $sql113 = "SELECT * FROM church ORDER BY church_id DESC";
    $result113 = $pdo->query($sql113);

        //display all weekly
    $sql114 = "SELECT * FROM weekly ORDER BY weekly_id DESC";
    $result114 = $pdo->query($sql114);

        //display all testimony
    $sql115 = "SELECT * FROM testimony ORDER BY testimony_id DESC";
    $result115 = $pdo->query($sql115);



?>