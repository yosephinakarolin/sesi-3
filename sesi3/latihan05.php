<?php
//model 1
$age = array("peter"=>"35", "Ben"=>"37", "Joe"=>"43");

//print_n($age);
//echo "umur dari peter  adalah" .$age["peter"];
foreach($age as $p => $u){
    echo $p. "umurnya" .$u;
    echo "<br>";
}