<?php
    $tims = ["Didi", "Budi", "Rudi", "Zaki"];
    array_pop($tims);
    foreach($tims as $person){
        echo $person. '<br/>';
    }
?>