<?php 

class Connection {

  public static function make($user, $pass) 
  
  {

    try {

      return new PDO('mysql:host=127.0.0.1;dbname=mytodo', $user, $pass);

    } catch (PDOException $e) {

      die($e->getMessage());

    }

  }

}