<?php
class Database
{
  public static $con;

  public function __construct()
  {
 try{
   
   $string="mysql:hostname=Localhost;dbname=shop_db";
   self::$con=new PDO($string,"root","");

 }catch (PDOException $e){
   die($e->getMessage());
 }
  }
  
  public static function getInstance()
  {
    if(self::$con){
      return self::$con;
    } 
    
    $a=new self();
    return self::$con;

  }

  
}


$db= Database::getInstance();