<?php

/**
 * This is my understanding from this question that for example strings similar this ([)] is also accpeted
 * if we examine that the string like ([)] is also accepted then we can have this idea
 *    that can we have an array and check every character in string with array
 *      and if the string is on array then we should remove the original string and its close equivalent
 *          from array and string.
 */
class SolutionOne
{
    public function isValid(string $s): bool
    {
        $stack = str_split($s);
        if (strlen($s) % 2 != 0) {
            return false;
        }

        $open = ['(', '[', '{'];
        $eq = [
            '(' => ')',
            '[' => ']',
            '{' => '}'
        ];

        while (true) {
            $j = 0;
            if (strlen($s) == 0) break;
            if (in_array($s[$j], $open)) {
                // remove the string from array
                unset($stack[$j]);
                if ($index = array_search($eq[$s[$j]], $stack)) {
                    // remove 2 characters from array. one original string and another one is its close equivalent
                    $s = $this->removeChar($s, $j, $index);
                    // remove close equivalent
                    unset($stack[$index]);
                    // reindex array because we used unset
                    $stack = array_values($stack);
                } else {
                    break;
                }
            } else {
                break;
            }
        }

        if (count($stack) != 0) {
            return false;
        }

        return true;
    }

    public function removeChar($string, $i, $j): string
    {
        $array = str_split($string);
        unset($array[$i]);
        unset($array[$j]);
        return implode('', $array);
    }
}