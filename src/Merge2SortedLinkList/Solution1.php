<?php

namespace App\Merge2SortedLinkList;

use App\Merge2SortedLinkList\NodeList;

class Solution1
{
    public function merge($list1, $list2)
    {
        $temp = new NodeList(-1);
        $head = $temp;

        while ($list1 && $list2) {
            if ($list1->val < $list2->val) {
                $temp->next = $list1;
                $list1 = $list1->next;
            } else {
                $temp->next = $list2;
                $list2 = $list2->next;
            }
            $temp = $temp->next;
        }
        $temp->next = (($list1 != null) ? $list1 : $list2);
        return $head->next;
    }
}