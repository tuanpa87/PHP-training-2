<?php 

require 'up.php';
require 'functions.php';
require 'Task.php';

$animals = ['dog', 'cat'];
$animals[] = 'elephant';

$person = [
  'age' => 31,
  'hair' => 'brown',
  'career' => 'developer'
];

$person['name'] = 'Jeff';

try {
  $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', $user, $pass);
} catch (PDOException $e) {
  die($e->getMessage());
}


$statement = $pdo->prepare('select * from todos');
$statement->execute();
$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

//dd($tasks[0]->foobar());

require 'index.view.php';
