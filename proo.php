<?php
$merk = [
    ["kopi", "Top", 1000],
    ["kopi", "Good Day", 3000],
    ["kopi", "Torabika", 1000],
    ["kopi", "Kapal Api", 2000],
    ["kopi ZUZU", "Beng Beng", 4000],
    ["kopi ZUZU", "Top + Energen", 7000],
    ["kopi ZUZU", "Kapalapi+frisian flag", 10000],
    ["kopi ZUZU", "Cokolatos", 7000],
    ["Kopi Campur", "Janji jiwa", 30000],
    ["Kopi Campur", "Btarbucks", 75000]

];

// foreach($merk as $key){
//     echo $key[0].$key[1].$key[2].PHP_EOL;
// }
$tem_arr=[];
foreach($merk as $key){
    $tem_arr[]=$key[0];
}
$proo=array_unique($tem_arr);
foreach($proo as $key_x){
    echo $key_x.PHP_EOL;
}
