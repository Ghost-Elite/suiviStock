<?php
function getConnection()
{
    $host = '';
    $mysqluser = 'root';
    $mysqlpassword = '';
    $dbname = 'produitdb';
    $dsn = "mysql:host=$host;dbname=$dbname";
    try {
        $db = new PDO($dsn, $mysqluser, $mysqlpassword);
    } catch (\Throwable $th) {
        throw $th;
    }

    return $db;
}
getConnection();
?>