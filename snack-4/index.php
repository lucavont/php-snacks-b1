<?php

$min = 1;
$max = 100;
$array = [];
$max_numbers= 15;

for($i = 0; $i < $max_numbers; $i++){
    $num = random_int($min, $max);
    if (!in_array($num,$array)){
        $array[] = $num;
    } else {
        $i--;
    }
}
foreach($array as $mynum){
    echo $mynum . "<br>";
}

?>