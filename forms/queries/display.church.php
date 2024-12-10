<?php

require "connection.php";

session_start();


//displya all the churches

//national
$national = "SELECT * FROM church WHERE country = 'cameroun' ORDER BY church_id DESC";
$result_national = $pdo->query($national);


//international
$international = "SELECT * FROM church WHERE country != 'cameroun' ORDER BY church_id DESC";
$result_international = $pdo->query($international);

?>