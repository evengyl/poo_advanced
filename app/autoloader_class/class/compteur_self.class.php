<?php
class Compteur
{
  // Déclaration de la variable $compteur
  private static $compteur = 0;

  public function __construct()
  {
    // On instancie la variable $compteur qui appartient à la classe (donc utilisation du mot-clé self).
    self::$compteur++;
  }

  public static function get_compteur() // Méthode statique qui renverra la valeur du compteur.
  {
    return self::$compteur;
  }

}

