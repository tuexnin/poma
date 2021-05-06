<?php

/**
 *
 */
class Config
{
  static $db;

  function __construct()
  {
    global $dba;
    self::$db = $dba;
  }


}

$config = new Config();

 ?>
