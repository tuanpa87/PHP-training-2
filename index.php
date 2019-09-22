<?php 

require 'up.php';
require 'functions.php';
require 'database/Connection.php';
require 'Task.php';

$animals = ['dog', 'cat'];
$animals[] = 'elephant';

$person = [
  'age' => 31,
  'hair' => 'brown',
  'career' => 'developer'
];

$person['name'] = 'Jeff';

$pdo = Connection::make($user, $pass);

$tasks = fetchAllTasks($pdo);

//dd($tasks[0]->foobar());

require 'index.view.php';
