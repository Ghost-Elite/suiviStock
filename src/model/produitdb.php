<?php
require_once 'db.php';
require_once '../entities/produit.php';


function addProduit($nom, $ref, $qStock)
{
   global $db;
   $sql = "INSERT INTO produit values(NULL,'$nom','$ref',$qStock)";
   $con = getConnection();
   return $con->exec($sql);
}

function getListProduit()
{
   global $db;
   $sql = "SELECT * FROM produit";
   return $db->query($sql)->fetchAll();
}

function deleteProduit($id)
{
   global $db;
   $sql = "SELECT FROM produit WHERE id = $id";
   return $db->exec($sql);
}

function updateProduit($nom, $qStock)
{
   global $db;
   return $db->exec("UPDATE produit SET nom = '$nom', stock = '$qStock'");
}

?>



//$result = addService('Com');
//echo $result; //1 0 ''