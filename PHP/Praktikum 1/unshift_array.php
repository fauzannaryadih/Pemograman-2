<?php
    $tims = ["Didi", "Budi", "Rudi", "Zaki"];
    array_unshift($tims, "Anji", "Sapri");
    foreach($tims as $person){
        echo $person. '<br/>';
    }
?>