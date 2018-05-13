<?php

/**
 * Description of Connexion
 *
 * @author oumayma
 */
class Connexion {
    private $bd;
        public function __construct(){
       
         }
       public function getConnexion(){
        try
        {
            $bd = new PDO('mysql:host=localhost;dbname=produits;charset=utf8', 'root', '');
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
        return $bd;
    }
}
