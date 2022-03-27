<?php
    $tims = ["Didi", "Budi", "Rudi", "Zaki"];
    array_shift($tims);
    foreach($tims as $person){
        echo $person. '<br/>';
    }
?>