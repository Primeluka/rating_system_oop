<?php
/*
   try
   {
      $pdo = new PDO('mysql:host=localhost;dbname=rating_system', 'root', '');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $pdo -> exec("SET CHARACTER SET utf8");
   }
   catch(PDOException $e)
   {
      echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
      die();
   }
*/

   $GLOBALS['config'] = array(

   'mysql' => array(
      'host' => 'localhost',
      'username' => 'root',
      'password' => '',
      'db' => 'rating_system'
   ));

   spl_autoload_register(function($class) {
   require_once 'classes/' . $class . '.php';
   });
