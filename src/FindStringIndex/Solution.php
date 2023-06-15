<?php
namespace App\FindStringIndex;

class Solution {

    public function solution1($haystack , $needle) {
        $LH = strlen($haystack);
        $LN = strlen($needle);
        $i = 0;
        while($i <= $LH - $LN) {
            if(substr($haystack , $i , $LN) == $needle) {
                return $i;
            }

            $i++;
        }
        return -1;
    }

    public function solution2($haystack , $needle) {
        for($i=0; $i <= $LH-$LN ; $i++) {
            $match = true;
            for($j=0 ; $j < $LN; $j++) {
                if($haystack[$i + $j] !== $needle[$j]) {
                    $match = false;
                    break;
                }
            }

            if ($match) {
                return $i;
            }
        }

        return -1;
    }
}