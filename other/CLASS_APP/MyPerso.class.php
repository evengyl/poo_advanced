<?php

namespace Evengyl\CLASS_APP;

Class MyPerso
{
	public $vie = 100;
	public $degat = 0;
	public $xp_gagnee = 0;
	public $status = 'En Vie';


	const MORT = 'Mort';
	const VIE = 'En Vie';


	const FORCE_MIN = 10;
	const FORCE_MOY = 20;
	const FORCE_HIG = 50;

	public function __construt()
	{

	}

	public function frapper($force_de_frappe)
	{
		$this->set_degat($this->degat + $force_de_frappe);
		$this->calcule_vie_restante($this->degat);
	}

	public function calcule_vie_restante($degat)
	{	
		$this->set_vie($this->vie - $degat);
		$this->dead_or_alive($this->vie);
		$status_actuelle = $this->get_status();
		if($status_actuelle == self::MORT)
		{
			echo 'le personnage est mort !</br>';
		}
		else if($status_actuelle == self::VIE)
		{
			$this->calcule_xp_gagnee($this->degat);
			echo 'Le personnage a survécu et a gagné des points</br>';
		}
		
	}

	public function calcule_xp_gagnee($degat)
	{
		$this->set_xp_gagnee($degat);
	}

	public function dead_or_alive($vie_restante)
	{
		$status_de_vie = $this->get_vie();
		
		if($status_de_vie <= 0)
		{
			$this->set_status(self::MORT);
		}
		else
		{
			$this->set_status(self::VIE);	
		}

	}







 	public function get_vie()
 	{
 		return $this->vie;
 	}

 	public function get_degat()
 	{
 		return $this->degat;
 	}

 	public function get_xp_gagnee()
 	{
 		return $this->xp_gagnee;
 	}
 	public function get_status()
 	{
 		return $this->status;
 	}



 	public function set_vie($vie)
 	{
 		$this->vie = $vie;
 	}
 	public function set_degat($degat)
 	{
 		$this->degat = $degat;
 	}
 	public function set_xp_gagnee($xp_gagnee)
 	{
 		$this->xp_gagnee = $xp_gagnee;
 	}
 	public function set_status($etat)
 	{
 		if($etat == self::MORT)
 			$this->status = self::MORT;
 		else if($etat == self::VIE)
 			$this->status = self::VIE;
 	}
}
?>