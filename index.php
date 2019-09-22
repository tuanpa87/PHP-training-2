<?php 

//$greeting  = "Hello world";

//$names = ['Jeff', 'John', 'Linda'];

// foreach ($names as $key => $name) {
//   echo "$name, ";
// }

require 'functions.php';

$animals = ['dog', 'cat'];
$animals[] = 'elephant';

$person = [
  'age' => 31,
  'hair' => 'brown',
  'career' => 'developer'
];

$person['name'] = 'Jeff';

// $task = [
//   'title'=> 'homework',
//   'due' => 'today',
//   'assigned_to' => 'self',
//   'completed' => false
// ];

//dd($person);


class Task {
  protected $description;
  protected $completed = false; 
  public function __construct ($description) 
  {
    //Automatically triggered on instantiation
    $this->description = $description;
  }

  public function complete () 
  {
    $this->completed = true;
  } 

  public function isComplete () 
  {
    return $this->completed;
  } 

  public function description() 
  {
    return $this->description;
  }

}

// $task = new Task('Go to the store');
// $task->complete();
// var_dump($task->isComplete());


$tasks = [
  new Task('Go to the store'),
  new Task('Finish homework'),
  new Task('Clear my room')
];

$tasks[0]->complete();


require 'index.view.php';
