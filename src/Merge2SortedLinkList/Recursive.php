<?php

namespace App\Merge2SortedLinkList;
use App\Merge2SortedLinkList\NodeList;

class Recursive
{
    public function merge($list1, $list2)
    {
        if ($list1 == NULL)
            return $list2;
        if ($list2 == NULL)
            return $list1;

        if ($list1->val < $list2->val) {
            $res = $list1;
            $res->next = $this->merge($list1->next, $list2);
        } else {
            $res = $list2;
            $res->next = $this->merge($list1, $list2->next);
        }
        return $res;
    }
}