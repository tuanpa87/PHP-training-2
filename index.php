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

$pdo = connectToDb($user, $pass);

$tasks = fetchAllTasks();

//dd($tasks[0]->foobar());

require 'index.view.php';
