<?php

namespace App\RemoveElements;

class RemoveElementsClass {

    public function solution1(&$nums , $val)
    {
        $nums = array_filter($nums , function($num) use($val) {
            return $num != $val;
        });

        return count($nums);
    }

    public function solution2(&$nums , $val) {
              
        $k = 0;
        foreach($nums as $num) {
            if ($num != $val) {
                $nums[$k] = $num;
                $k++;
            }
        }
        array_splice($nums, $k);
        return $k;
    }
}