<?php

namespace App\PalindromeNumbers;

/**
 * Solution is reverse the number and then compare with main number
 *
 * 11510 / 11510 test cases passed.
 * Status: Accepted
 * Runtime: 106 ms
 * Memory Usage: 19 MB
 *
 */
class Solution1
{
    public function isPalindrome($x)
    {
        $y = $x;
        $reverseNumber = 0;

        // 123 => convert to 321
        // because the reverse of 123 =
        //    step 1 => 3 + (0 * 10) = 3
        //    step 2 => 3 * 10 + 2
        //    step 3 => 32 * 10 + 1 = 321
        while ($x > 0) {
            $lastDigit = $x % 10;
            $reverseNumber = ($reverseNumber * 10) + $lastDigit;
            $x = floor($x / 10);
        }

        if ($reverseNumber === $y) {
            return true;
        } else {
            return false;
        }
    }
}