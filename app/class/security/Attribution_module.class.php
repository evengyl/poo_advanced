<?php
namespace Evengyl\security;

use Evengyl\module;


Class Attribution_module
{
    private $content_module;
    private $module_name;


    public function get_module_name($content_module)
    {
        $this->content_module = $content_module;
        if(isset($content_module))
        {
            if($content_module != "")
            {
                if($content_module != " ")
                {
                    if(strstr($this->content_module, '__MOD'))
                    {
                        $this->module_name = strstr($this->content_module, '__MOD');
                    }
                    else
                    {
                        $this->module_name = "__MOD_Home__";
                    }
                }
                else
                {
                    $this->module_name = "__MOD_Home__";
                }
            }
            else
            {
                $this->module_name = "__MOD_Home__";
            }
        }
        else
        {
            $this->module_name = "__MOD_Home__";
        }

        $this->module_name = substr($this->module_name, 6);
        $this->module_name = substr($this->module_name, 0, -2);
        return $this->module_name;


    }
}


?>