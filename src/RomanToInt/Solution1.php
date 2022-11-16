<?php

namespace App\RomanToInt;

class Solution1
{
    public function romanToInteger($s){
        $data = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        ];
        if (in_array($s, $data)) {
            return $data[$s];
        }

        $sum = 0;
        $key = 0;

        while ($key < strlen($s)) {
            $currentWordValue = $data[$s[$key]];
            if ($key < strlen($s) - 1) {
                if ($data[$s[$key + 1]] > $currentWordValue) {
                    $sum += $data[$s[$key + 1]] - $currentWordValue;
                    $key = $key + 2;
                } else {
                    $sum += $data[$s[$key]];
                    $key++;
                }
            } else {
                $sum += $data[$s[$key]];
                $key++;
            }
        }

        return $sum;
    }
}