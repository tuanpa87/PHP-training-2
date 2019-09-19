<?php 

//$greeting  = "Hello world";

//$names = ['Jeff', 'John', 'Linda'];

// foreach ($names as $key => $name) {
//   echo "$name, ";
// }


$animals = ['dog', 'cat'];
$animals[] = 'elephant';

$person = [
  'age' => 31,
  'hair' => 'brown',
  'career' => 'developer'
];

$person['name'] = 'Jeff';

$task = [
  'title'=> 'homework',
  'due' => 'today',
  'assigned_to' => 'self',
  'completed' => false
];

require 'index.view.php';
