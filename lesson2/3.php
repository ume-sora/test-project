<?php
//0から100の点数を変数に代入し、成績判定するプログラムを作成してください
//100点 -> AA
//90点以上 -> A
//80点以上 -> B
//70点以上 -> C
//60点以上 -> D
//60点未満 -> E

$score = 50;
if ($score == 100){ //100と等しかったらAA
    echo "AA";
} else if ($score >= 90){ //90以上ならA
    echo "A";
} else if ($score >= 80){ //80以上ならB
    echo "B";
} else if ($score >= 70){ //70以上ならC
    echo "C";
} else if ($score >= 60){ //60以上ならD
    echo "D";
} else {
    echo "E"; //それ以下ならE
}
echo "\n";
?>