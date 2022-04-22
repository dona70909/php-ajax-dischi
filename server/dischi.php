<?php 
    include_once __DIR__ . "/data.php";

    header('Content-Type: application/json; charset=utf-8');

    echo json_encode($db_dischi);
?>

