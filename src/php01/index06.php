<?php
function outputScore($score1, $score2, $score3)
{
    $total = $score1 + $score2 + $score3;
    $text1 = '合計点は';
    if ($total >= 210) {
        echo $text1 . $total . 'なので合格です' . '<br/ >';
    }else{
        echo $text1 . $total . 'なので不合格です' . '<br/ >';
    }
}

outputScore (80, 40, 75);

function triangleArea($base, $height)
{
    return $base * $height / 2;
}
function squareArea($base, $height)
{
    return $base * $height;
}
function trapezoidArea($upperBase, $lowerBase, $height)
{
    return ($upperBase + $lowerBase ) * $height / 2;
}

echo triangleArea(20, 25) . "\n";
echo squareArea(20, 25) . "\n";
echo trapezoidArea(15, 20, 25);