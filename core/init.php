<?php

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
