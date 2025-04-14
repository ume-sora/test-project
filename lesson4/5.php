<?php
//特定の文字列が回文かどうかを判別するプログラムを作成してください

$word = "madam"; //回文か判断したい文字列

$test = strrev($word); //$wordの文字列を逆さにする

if ($word == $test){ //逆順にした文字列が一致しているかどうか
    echo "Yes" . "\n";
} else {
    echo "No" . "\n";
}

?>