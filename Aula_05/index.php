<?php
    $MSG = "Sua média é: ";
    $nome ="User";
    $M1 = 8;
    $M2 = 9;
    $M3 = 1;
    $media = 0;
    $media = (($M1 + $M2 + $M3)/3);

    if ($media >= 9) {
        echo"MB";
    } elseif ($media >=7 ) {
        echo"B";
    } elseif ($media >= 4) {
        echo"R";
    } elseif ($media < 4 ) {
        echo"I";
    } else {
        echo"NA";
    }
?>