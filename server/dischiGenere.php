<?php
    include __DIR__ . "/data.php";

    header('Content-Type: application/json');

    $genere = $_GET["genere"];

    function filter_array($db_dischi,$genere) {
        $filter_dischi = [];
        //var_dump($genere . " genere");
        foreach($db_dischi as $disc) {
            //var_dump($disc["genre"] . " riga 10");
            if(strcasecmp($disc['genre'],$genere) === 0){
                //var_dump($disc['genre'] == $genere . "check");
                $filter_dischi[] = $disc; 
            }
        }

        //var_dump($filter_dischi);
        return $filter_dischi;
    }

    //echo filter_array($db_dischi,$genere);

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