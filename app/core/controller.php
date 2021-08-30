<?php

class Controller 
{
   public function view($path,$data=[])
   {
    
    if(file_exists("../app/views/". $path . ".php"))
    {
       include "../app/views/" . $path .".php";
    } 
   }


   public function load_model($model)
   {
    
    if(file_exists("../app/model/". strtolower($model). ".class.php"))
    {
       include "../app/model/" . strtolower($model) .".class.php";
       return $a=new $model();
    } 


    return false;
   }






}