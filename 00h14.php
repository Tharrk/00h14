<?php
    $date = getdate();

    if($date["minutes"] == 14 && $date["hours"] == 0) echo "JOYEUX MINUIT QUATORZE !!!!";

    else if($date["minutes"] < 14 && $date["hours"] == 0)
    {
        $delta = 14 - $date["minutes"];
        
        if($delta == 1) echo "Il reste une minute avant 00h14 ! Pas de faux départ !";
        else echo "Il reste ".$delta." minutes avant le prochain 00h14.";
    }

    else
    {
        $delta = 14 + (23*60 - $date["hours"]*60) + (60 - $date["minutes"]);
        $deltaMin = $delta%60;
        $deltaHours = ($delta-$deltaMin)/60;
        
        echo "Il reste ".$deltaHours." heures et ".$deltaMin." minutes avant le prochain 00h14.";
    }
?>