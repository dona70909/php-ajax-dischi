<?php
    include __DIR__ . "/data.php";

    header('Content-Type: application/json');

    $genere = $_GET["genere"];

    function filter_array($db_dischi,$genere) {
        $filter_dischi = [];
        foreach($db_dischi as $disc) {
            if(strcasecmp($disc['genre'],$genere) === 0){
                $filter_dischi[] = $disc; 
            }
        }

        return $filter_dischi;
    }


    if(isset($genere) && (strlen($genere) != 0)) {
        echo json_encode([
            'response' => filter_array($db_dischi,$genere),
        ]);
    } else {
        echo json_encode([
            'response' => $db_dischi,
        ]);
    }



?>