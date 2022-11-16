<?php

namespace App\MostCommonPrefix;

class Solution
{
    public function getMostCommonPrefix(array $data)
    {
        if (count($data) == 0) return "";

        $prefix = $data[0];

        for ($i = 1; $i < count($data); $i++) {
            // php version >= 8
            while (!str_starts_with($data[$i], $prefix)) {
                $prefix = substr($prefix, 0, strlen($prefix) - 1);
            }

            // php version < 8
//            while (!substr($data[$i], 0, strlen($prefix)) == $prefix ) {
//                $prefix = substr($prefix, 0, strlen($prefix) - 1);
//            }
        }
        return $prefix;
    }
}