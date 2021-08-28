<?php
class App 
{
  protected $controller="home";
  protected $method="index";

  function __construct()
  {

    $url=$this->parseURL();
    print_r($url);
  }


  private function parseURL()
  {
   $url=isset($_GET['url']) ? $_GET['url']: 'home';
   return explode("/",$url);
   
  }
}