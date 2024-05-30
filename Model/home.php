<?php


echo "# HOME MODEL<br>";

$nameList = [
    [
        'name' => "Giray Altınok"
    ],    
    [
        'name' => "Ahmet Kural"
    ],    
    [
        'name' => "Murat Cemcir"
    ]
];

$modelData = [
    'nameList' => $nameList
];

view("home", $modelData);

echo "<br># -HOME MODEL<br>";