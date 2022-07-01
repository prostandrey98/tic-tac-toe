<?php

use Provider\Provider;

$_POST["arrayid"][$_POST["id"]] = "X";

$araryDiagonal = [[0, 1, 2],
                  [3, 4, 5],
                  [6, 7, 8],
                  [2, 4, 6],
                  [0, 4, 8],
                  [0, 3, 6],
                  [1, 4, 7],
                  [2, 5, 8],];

for ($i = 0; $i < 8; $i++){
    if (($_POST["arrayid"][$araryDiagonal[$i][0]] == "X" && $_POST["arrayid"][$araryDiagonal[$i][1]] == "X" && $_POST["arrayid"][$araryDiagonal[$i][2]] == "X")){
        $Provider = new Provider();
        $Provider->levelUp($_SESSION['level'], $_SESSION['login']);
        echo "victory";
        exit;
    }
}

for ($i = 0; $i < 8; $i++){
    $count = 0;
    $index = -1;
    for ($j = 0; $j < 3; $j++){
        if ($_POST["arrayid"][$araryDiagonal[$i][$j]] == "0"){
            $count++;
        }
        if ($_POST["arrayid"][$araryDiagonal[$i][$j]] == ""){
            $index = $araryDiagonal[$i][$j];
        }
    }

    if ($count == 2 && $index != -1){
        echo $index+20;
        if ($_SESSION['level'] > 1){
            $Provider = new Provider();
            $Provider->levelDown($_SESSION['level'], $_SESSION['login']);    
        }
        exit;
    }
}

for ($i = 0; $i < 8; $i++){
    $count = 0;
    $index = -1;
    for ($j = 0; $j < 3; $j++){
        if ($_POST["arrayid"][$araryDiagonal[$i][$j]] == "X"){
            $count++;
        }
        if ($_POST["arrayid"][$araryDiagonal[$i][$j]] == ""){
            $index = $araryDiagonal[$i][$j];
        }
    }

    if ($count == 2 && $index >= 0 && $index <9){
        echo $index;
        exit;
    }
}

shuffle($araryDiagonal);
for ($i = 0; $i < 8; $i++){
    shuffle($araryDiagonal[$i]);
}

for ($i = 0; $i < 8; $i++){
    $count = 0;
    $count2 = 0;
    $index = -1;
    for ($j = 0; $j < 3; $j++){
        if ($_POST["arrayid"][$araryDiagonal[$i][$j]] == ""){
            $count++;
            $index = $araryDiagonal[$i][$j];
        }
        if ($_POST["arrayid"][$araryDiagonal[$i][$j]] == "0"){
            $count2++;
        }
    }

    if ($count == 2 && $count2 == 1){
        echo $index;
        exit;
    }
}

for ($i = 0; $i < 8; $i++){
    $count = 0;
    $index = -1;
    for ($j = 0; $j < 3; $j++){
        if ($_POST["arrayid"][$araryDiagonal[$i][$j]] == ""){
            $count++;
            if ($j == 1){
                $index = $araryDiagonal[$i][$j];
            }
        }
    }

    if ($count == 3){
        echo $index;
        exit;
    }
}

for ($i = 0; $i < 9; $i++){
    if ($_POST["arrayid"][$i] == ""){
        echo $i;
        exit;
    }
}