<?php

/**
 * In this solution we examine that the string like ([)] is not accepted.
 *   because we use stack and in stack the last component in stack should be equivalent with
 */

class SolutionTwo
{
    public function isValid(string $s): bool
    {
        if (strlen($s) % 2 != 0) {
            return false;
        }

        $open = ['(', '[', '{'];
        $eq = [
            '[' => ']',
            '(' => ')',
            '{' => '}',
        ];
        $stack = [];

        for ($i = 0; $i < strlen($s); $i++) {
            if (in_array($s[$i], $open)) {
                $stack[] = $s[$i];
            } else {
                $popChar = array_pop($stack);
                if (count($stack) == 0) {
                    return false;
                }
                if (!isset($eq[$popChar]) || $s[$i] !== $eq[$popChar]) {
                    return false;
                }
            }
        }
        return count($stack) === 0;
    }
}