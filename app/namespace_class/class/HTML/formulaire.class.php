<?php



namespace Evengyl\HTML;


Class Formulaire
{

    private $data;
    public $tag_surround;


	public function __construct($data = array())
	{
		$this->data = $data;
	}


    /**
     * @param $data_form string , data du formulaire
     * @return string
     */
    protected function surround($data_form)
    {
        if(isset($this->tag_surround) && $this->tag_surround != '' && $this->tag_surround != ' ')
        {
            return "<{$this->tag_surround}>{$data_form}</{$this->tag_surround}>";
        }
        else
        {
            return $data_form;
        }
    }

	/**
	 * @param $method string
	 * @param $action string
	 */
	public function start_form($method, $action)
	{
        return '<form action="'. $action .'" method ="'. $method .'">';

	}

    /**
     * @return string retourne la fin du formulaire
     */
    public function end_form()
    {
        return '</form>';
    }

    /**
     * @param $index string index de la valeur a récuperer
     * @return string
     */
    protected function get_value($index)
    {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }


	/**
	 * @param $name
	 */
	public function input($name)
	{
        return $this->surround('<input type="text" name="' . $name . '" value="' . $this->get_value($name) . '" />');
	}



	/**
	 * @return string Retourne le bouton submit
	 */
	public function submit()
	{
        return $this->surround('<button type="submit">Envoyer</button>');
	}
}




?>