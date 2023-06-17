<?php

namespace App\PlusOne;

class Solution {
    public function solve(array $digits) {
        $n = count($digits);
        $carry = 1;

        for($i = $n - 1 ; $i >= 0; $i--) {
            $sum = $digits[$i] + $carry;

            $digits[$i] = $sum % 10;
            $carry = intdiv($sum , 10);

            if ($carry === 0) {
                break;
            }
        }

        if($carry > 0) {
            array_unshift($digits , $carry);
        }

        return $digits;
    }
}