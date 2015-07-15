<?php

Class Bootstrap extends Formulaire
{
    private $data;
    public $tag_surround;


    public function __construct($data = array())
    {
        $this->data = $data;
    }

    /**
     * @param $method string
     * @param $action string
     */

    protected function surround($data_form)
    {
            return '<div class="form-group">'.$data_form.'</div>';
    }

    public function start_form($method, $action)
    {
        return '<form  action="'. $action .'" method ="'. $method .'">';
    }

    /**
     * @param $name
     */
    public function input($name)
    {
        return $this->surround('<label class="control-label">' . $name . '</label>
                        <input type="text" class="form-control"  name="' . $name . '" placeholder="'. $name .'" value="' . parent::get_value($name) . '" />');
    }
    /**
     * @return string Retourne le bouton submit
     */
    public function submit()
    {
        return '<button class="btn btn-primary" type="submit">Envoyer</button>';
    }

}


?>