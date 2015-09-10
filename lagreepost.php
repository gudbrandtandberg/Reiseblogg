<?php

    $epost = $_GET["epost"];
    $mailinglist = json_decode(file_get_contents("mailinglist.json"));
    array_push($mailinglist, $epost);
    file_put_contents("mailinglist.json", json_encode($mailinglist));
    
    //sender en liten mail til mæsjæl
    $headers = "From: gudbrandduff@gmail.com\r\n";
    $headers .= "CC: sarahpetersenfuchs@gmail.com\r\n";
    mail("gudbrandduff@gmail.com", "Ny fæn", "Eposten ".$epost." følger med!", $headers);

?>