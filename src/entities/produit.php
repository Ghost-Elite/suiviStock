<?php 
require_once 'User.php';
class Produit
{
    
    private $ref;
    private $nom;
    private $qStock;
    private $id;
    

    public function __construct(){
        $this->id = new User();
    }


    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getRef(){
        return $this->ref;
    }
    public function setRef($ref){
        $this->ref = $ref;
    }
    public function getQstock(){
        return $this->qStock;
    }
    public function setQstock($qStock){
        $this->qStock = $qStock;
    }

    



}



?>