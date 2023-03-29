<?php
$mhs = array (
    array("Ardika","1212121212","Denpasar"),
    array ("wahyu","3214321234","Manado"),
    array ("Susanti","1324123456","Jakarta"),
    array("Fizi","1678543213","Malang"),
);

foreach($mhs as $idx => $dta){
    echo "Data ke-".$idx."<br>";

    foreach($dta as $nval){
        echo $nval.  "<br>";

    }
    echo "<br>";
}