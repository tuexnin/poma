<?php

require "librerias/Medoo.php";
use Medoo\Medoo;
$dba = new Medoo([
  'database_type' => 'mysql',
  'database_name' => 'pomabamba',
  'server' => 'localhost',
  'username' => 'root'
  'password' => ''
]);

require "class/config.php";
require "class/sesion.php";
require "class/sesion.php"


 ?>
