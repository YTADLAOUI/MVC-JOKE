<?php 

class DB{
   public static function conx(){
$db=new PDO("mysql:host=localhost;dbname=joke","root","")
$db->exec("set names utf8");
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERROR_WARNING);
return $db;
 }
 
}

?>