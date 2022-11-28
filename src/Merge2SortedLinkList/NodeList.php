<?php

namespace App\Merge2SortedLinkList;

class NodeList
{
    public $val = 0;
    public $next = null;

    public function __construct($val, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}