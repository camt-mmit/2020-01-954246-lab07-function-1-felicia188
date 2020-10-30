<?php
//用函数温度换算
//602110188 chensho
//file:ass-01-data1.txt & ass-01-data2.txt
    function power($Celsius) {
        $Fahrenheit=$Celsius*(9/5)+32;
        return $Fahrenheit;
    }
    function dis($Celsius,$en){
        printf("%6.2f %6.2f\n", $Celsius ,$en);
      }
    $fin = fopen($_SERVER['argv'][1], 'r');
    fscanf($fin, "%d", $n);
    for($i = 0; $i < $n; $i++) {
        fscanf($fin, "%d %d %f", $start,$end,$add);
        $number=($end-$start)/$add+1;
        /**
         * Why just use this.
         */
        // for($j=0;$j<$number;$j++){
        //     $term=power($start);
        //     if($start<=$end){
        //     $result=dis($start,$term);
        //     $start+=$add;
        //   }
        for($j=$start;$j<=$end;$j += $add){
          $term=power($j);
          dis($j,$term);
        }
        
      }