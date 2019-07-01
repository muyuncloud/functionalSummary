<?php

//创建不重复的随机函数  [$start 初始值]  [$total  结束值]
function createRandom($start, $total){
    
    if (!$start || !$total) {
        return false;
    }
    for ($i=$start; $i < $total; $i++) {
        $sequence[$i] = $i;
    }
    $end = $total - 1;
    $output = array();
    for ($i=$start; $i < $total; $i++) {
        $num = rand($start,$end);//1
        $output[$i] = $sequence[$num];
        $sequence[$num] = $sequence[$end];
        $end--;
    }
    return $output;
}
