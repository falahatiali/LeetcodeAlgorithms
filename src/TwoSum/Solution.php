<?php

namespace App\TwoSum;

/**
 * RESULT AFTER SUBMISSION
 *
 * 57 / 57 test cases passed
 * Status: Accepted
 * Runtime: 495 ms
 * Memory Usage: 19.9 MB
 *
 */
class Solution
{
    public function twoSum($nums, $target)
    {
        $res = [];
        for ($i = 0; $i < count($nums); $i++) {
            $diff = $target - $nums[$i];

            if (in_array($diff, $this->diffArray($nums, $i))) {
                $res[] = $i;
                $res[] = array_search($diff, $this->diffArray($nums, $i));
                break;
            }
        }
        return $res;
    }

    private function diffArray($nums, $i)
    {
        unset($nums[$i]);
        return $nums;
    }
}