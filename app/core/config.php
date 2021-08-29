<?php
define('WEBSITE_TITLE','E-shop');

define('DB_NAME','shop_db');
define('DB_USER',"root");
define('DB_PASS',"");


define('DEBUG',true);

if(DEBUG){
  ini_set('display_errors',1);
} else{
  ini_set('display_errors',0);
}