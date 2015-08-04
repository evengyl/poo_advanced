<?php

namespace Evengyl\module;

Class Home
{
    private $class_name;


    public function get_template_name()
    {
        return $this->class_name = "Home";
    }

}
$foo = new Home;
$template_name = $foo->get_template_name();
ob_start();
require "../contents/" . $template_name . ".php";
$content_templates = ob_get_clean();

?>