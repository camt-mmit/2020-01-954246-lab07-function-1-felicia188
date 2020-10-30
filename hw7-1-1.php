<?php
//用函数温度换算
//602110188 chensho
function power($Celsius) {
  $Fahrenheit=$Celsius*(9/5)+32;
  return $Fahrenheit;
}
function dis($Celsius,$en){
  printf("%6.2f %6.2f\n", $Celsius ,$en);
}

    $start=$argv[1];//0
    $end=$argv[2];
    $add=$argv[3];
    $n=($end-$start)/$add+1;
  
  /**
   * Why just use this.
   */
  // for($i=0;$i<$n;$i++){
  //   $term=power($start);
  //  $result=dis($start,$term);
  //   $start+=$add;//0+1;0+1+1
  // }
  for($i=$start;$i<=$end;$i += $add){
    $term=power($i);
   $result=dis($i,$term);
  }

    