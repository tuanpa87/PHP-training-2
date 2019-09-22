<?php
require 'up.php';

function dd($data, $die=true) {
  echo '<pre>';
  var_dump($data);
  echo '</pre>';
  if ($die) die();
}

function connectToDb ($user, $pass) {
  try {
    return new PDO('mysql:host=127.0.0.1;dbname=mytodo', $user, $pass);
  } catch (PDOException $e) {
    die($e->getMessage());
  }
}

function fetchAllTasks () {
  $statement = $pdo->prepare('select * from todos');
  $statement->execute();
  return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}