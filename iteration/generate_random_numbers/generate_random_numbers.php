<?php

//创建不重复的随机函数  [$low 初始值] [$high 结束值] [$total 生成总数]
function createRandom($low, $high, $total){
    
    if (!$low || !$total) {
        return false;
    }

    $sequence = range($low, $high);
    $end = count($sequence) - 1;
    $output = array();

    for ($i= 0; $i < $total; $i++) {

        $num = rand(0,$end);//1
        $output[$i] = $sequence[$num];
        $sequence[$num] = $sequence[$end];
        $end--;
    }
    return $output;
}
