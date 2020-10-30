<?php
//file:ass-02-data1.txt & ass-02-data2.txt
//602110188 chensho
/**
 * This function is useless, it does the same thing as pow().
 */
function power($b,$number) {//文档第一行数据
    $yy=pow($b,$number);
    return $yy;
}

$fin = fopen($_SERVER['argv'][1], 'r');
fscanf($fin, "%d", $n);
for($j = 1; $j <= $n; $j++) {//文档的每一行
    fscanf($fin, "%d %d",$base[$j],$y[$j]);//文档的第j行数据10 1
$result[$j]=power($result[$j-1]-$base[$j],$y[$j]);
      }

    printf("%d",$result[$n]);
    

