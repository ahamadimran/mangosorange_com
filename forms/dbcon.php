<?php
$servername='localhost';
$username="mango9yb_mangosuser";
$password="Mangos@#123";
 
try
{
    $con=new PDO("mysql:host=$servername;dbname=mango9yb_mangosdb",$username,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //echo 'connected';
}
catch(PDOException $e)
{
    echo '<br>'.$e->getMessage();
}
     
?>