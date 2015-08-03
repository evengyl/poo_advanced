<?php

namespace Evengyl\table;

Class Client
{
	public $url = "";
    public function get_link_website()
    {
        return '?page=client_no='.$this->id;
    }

    public function get_url()
    {
    	return 'index.php?page=listing_clients&id='.$this->id;
    }
}