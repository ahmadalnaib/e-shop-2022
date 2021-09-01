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
    
    return $instance=new self();

  }


  //read
  public function read($query,$data=array())
  {
    $stm=self::$con->prepare($query);
    $result=$stm->execute();

    if($result)
    {
    $data=$stm->fetchAll(PDO::FETCH_OBJ);
    if(is_array($data))
    {
      return $data;
    }
  }
    return false;

  }
  //write
  public function write($query,$date=array())
  {

  }

  
}


$db= Database::getInstance();
$data=$db->read("describe users");
show($data);