<?php 

//$greeting  = "Hello world";

//$names = ['Jeff', 'John', 'Linda'];

// foreach ($names as $key => $name) {
//   echo "$name, ";
// }

require 'up.php';
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

try {
  $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', $user, $pass);
} catch (PDOException $e) {
  die($e->getMessage());
}


$statement = $pdo->prepare('select * from todos');
$statement->execute();
$tasks = $statement->fetchAll(PDO::FETCH_OBJ);

//dd($result[0]->description);

require 'index.view.php';
