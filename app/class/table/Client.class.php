<?php

namespace Evengyl\table;

Class Client
{
    public function get_link_website()
    {
        return '?page=client_no='.$this->id;
    }
}