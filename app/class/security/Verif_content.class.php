<?php

namespace Evengyl\security;


Class Verif_content
{

    private $element_content;

    public function get_content_sure($element_content)
    {
        if(isset($element_content))
        {
            $this->element_content = $element_content;
        }
        else
        {
            return "Elément vide ou erroné";
        }


        if($this->element_content != null)
        {
            $this->element_content = html_entity_decode($this->element_content);
        }
        return $this->element_content;
    }
}