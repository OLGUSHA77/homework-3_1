<?php

$mass = [
    "America" => array("Bison","Haliaeetus","Castor fiber ","Lupus","Lepus californicus"),
    "Arctica" => array("Vulpes lagopus","Odobenus rosmarus","Ursus maritimus","Orcinus orca"),
    "Africa" => array("Equus","Panthera pardus","Crocodylus niloticus","Giraffa camelopardalis"),
];
$newMass = [];
$space = " ";
foreach ($mass as $key => $value) {
    foreach($value as $animal ) {
        if (substr_count($animal, $space) == 1) {
            $str = explode($space, $animal);
            $mass1[] = $str[0];
            $mass2[] = $str[1];
        }
    }
}

shuffle($mass1);
shuffle($mass2);
$allMass = array();
foreach ($mass1 as $key => $value) {
    $allMass[] = $value . ' ' . $mass2[$key];
}

echo '<h2>Животные по континентам</h2>';
foreach ($mass as $key => $value) {

    $printMass = [];
    echo '<h3>' . $key . '</h3>';   //печать континентов

    foreach ($value as $animal) {

        $m1 = explode(" ", $animal);

        foreach ($allMass as $fantasticAnimal) {
            $m2 = explode(" ", $fantasticAnimal);

            if ($m1[0] == $m2[0]) {
                $printMass[] = $fantasticAnimal;
            }
        }
    }
    print_r(implode(",", $printMass));
}


