<?php 
class User
{
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $password;
    private $etat;

    public function __construct(){

    }


    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }

    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }
    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function getEtat(){
        return $this->etat;
    }

    public function setEtat($etat){
        $this->etat = $etat;
    }

    



}



?>