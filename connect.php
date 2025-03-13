<?php

require_once 'smblogin.php';
try 
{
    $pdo=new PDO($attr, $user, $pass, $opts);
}
catch (PDOException $e)
{   
    throw new Exception( $e->getMessage(), (int)$e->getCode() );    
}   

?>
