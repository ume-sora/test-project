<?php
//ある整数を変数に代入し、正の数か負の数かゼロのいずれかを判定するプログラムを作成

$num = -2;

if ($num == 0){
    echo "ゼロ";
} else if ($num > 0){
    echo "正の数";
} else if ($num < 0){
    echo "負の数";
}
echo "\n";
?>