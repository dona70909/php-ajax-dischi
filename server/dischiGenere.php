<?php
    include __DIR__ . "/data.php";

    $genere = $_GET["genere"];

    function filter_array($db_dischi,$genere) {
        $filter_dischi = [];
        //var_dump($genere . " genere");
        foreach($db_dischi as $disc) {
            //var_dump($disc["genre"] . " riga 10");
            if($disc['genre'] == $genere){
                //var_dump($disc['genre'] == $genere . "check");
                $filter_dischi[] = $disc; 
            }
        }

        //var_dump($filter_dischi);
        return $filter_dischi;
    }

    //echo filter_array($db_dischi,$genere);

    if(isset($genere)) {
        echo json_encode([
            'response' => filter_array($db_dischi,$genere),
        ]);
    } 



?>