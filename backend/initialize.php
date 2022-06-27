<?php 
ob_start();

  date_default_timezone_set('Asia/Manila');

  // include 'classes/Database.php';
  // include "classes/FormSanitizer.php";

  spl_autoload_register(function($class){
    require_once "classes/$class.php";
  });




  define("DB_HOST", "localhost");
  define("DB_NAME", "rafa");
  define("DB_USER", "jel");
  define("DB_PASS", "password");
  /*
  define("BASE_URL", "http://localhost/twitter")
  */
  $public_end = strpos($_SERVER['SCRIPT_NAME'],'/frontend')+9;
  $doc_root=substr($_SERVER['SCRIPT_NAME'],0,$public_end);
  define("WWW_ROOT", $doc_root);
 
  include 'functions.php';
?>