<?php
require_once 'db.php';



    function ajoutUser($nom,$prenom,$email,$password,$etat){
        global $db;
        $sql = "INSERT INTO user (null,nom,prenom,email,etat) VALUES ('$nom','$prenom','$email','$password','$etat')";
        $con = getConnection();
        return $con->exec($sql);
    }

    function listUser()
    {
        $con = getConnection();
        $sql = "SELECT * FROM user ";
        return $con->query($sql)->fetchAll();
    }

    function deleteUser($id)
    {
        $con = getConnection();
        $sql = "DELET FROM user WHERE id = $id";
        return $con->exec($sql);
    }

    function updateUser($nom,$prenom,$email,$password,$etat)
    {
        $con = getConnection();
        return $con->exec("UPDATE user SET nom = '$nom',prenom = '$prenom' , email = '$email' , password = $'prenom' , etat = '$etat'");
    }


?>